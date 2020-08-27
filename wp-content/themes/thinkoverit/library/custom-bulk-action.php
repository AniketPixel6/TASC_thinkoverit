<?php
if (!class_exists('Custom_Bulk_Action')) {
 
	class Custom_Bulk_Action {
		
		public function __construct() {
			
			if(is_admin()) {
				// admin actions/filters
				add_action('admin_footer-edit.php', array(&$this, 'custom_bulk_admin_footer'));
				add_action('load-edit.php',         array(&$this, 'custom_bulk_action'));
				add_action('admin_notices',         array(&$this, 'custom_bulk_admin_notices'));
			}
		}
		
		
		/**
		 * Step 1: add the custom Bulk Action to the select menus
		 */
		function custom_bulk_admin_footer() {
			global $post_type;
			
			//if($post_type == 'post') {
				?>
					<script type="text/javascript">
						jQuery(document).ready(function() {
							jQuery('<option>').val('duplicate').text('<?php _e('Duplicate')?>').appendTo("select[name='action']");
							jQuery('<option>').val('duplicate').text('<?php _e('Duplicate')?>').appendTo("select[name='action2']");
						});
					</script>
				<?php
	    	//}
		}
		
		
		/**
		 * Step 2: handle the custom Bulk Action
		 * 
		 * Based on the post http://wordpress.stackexchange.com/questions/29822/custom-bulk-action
		 */
		function custom_bulk_action() {
			global $typenow;
			$post_type = $typenow;
			
			//if($post_type == 'post') {
				
				// get the action
				$wp_list_table = _get_list_table('WP_Posts_List_Table');  // depending on your resource type this could be WP_Users_List_Table, WP_Comments_List_Table, etc
				$action = $wp_list_table->current_action();
				
				$allowed_actions = array("duplicate");
				if(!in_array($action, $allowed_actions)) return;
				
				// security check
				check_admin_referer('bulk-posts');
				
				// make sure ids are submitted.  depending on the resource type, this may be 'media' or 'ids'
				if(isset($_REQUEST['post'])) {
					$post_ids = array_map('intval', $_REQUEST['post']);
				}
				
				if(empty($post_ids)) return;
				
				// this is based on wp-admin/edit.php
				$sendback = remove_query_arg( array('duplicated', 'untrashed', 'deleted', 'ids'), wp_get_referer() );
				if ( ! $sendback )
					$sendback = admin_url( "edit.php?post_type=$post_type" );
				
				$pagenum = $wp_list_table->get_pagenum();
				$sendback = add_query_arg( 'paged', $pagenum, $sendback );
				
				switch($action) {
					case 'duplicate':
						
						$duplicated = 0;
						foreach( $post_ids as $post_id ) {
							
							if ( !$this->perform_export($post_id) )
								wp_die( __('Error duplicating post.') );
			
							$duplicated++;
						}
						
						$sendback = add_query_arg( array('duplicated' => $duplicated, 'ids' => join(',', $post_ids) ), $sendback );
					break;
					
					default: return;
				}
				
				$sendback = remove_query_arg( array('action', 'action2', 'tags_input', 'post_author', 'comment_status', 'ping_status', '_status',  'post', 'bulk_edit', 'post_view'), $sendback );
				
				wp_redirect($sendback);
				exit();
			//}
		}
		
		
		/**
		 * Step 3: display an admin notice on the Posts page after exporting
		 */
		function custom_bulk_admin_notices() {
			global $post_type, $pagenow;
			
			if($pagenow == 'edit.php' /*&& $post_type == 'post' */ && isset($_REQUEST['duplicated']) && (int) $_REQUEST['duplicated']) {
				$message = sprintf( _n( 'Post Duplicated.', '%s posts Duplicated.', $_REQUEST['duplicated'] ), number_format_i18n( $_REQUEST['duplicated'] ) );
				echo "<div class=\"updated\"><p>{$message}</p></div>";
			}
		}
		
		function perform_export($post_id) {
			
   $post = get_post($post_id, 'ARRAY_A');
   $meta = get_post_custom($post_id);
   
   unset($post['ID']);
   $new_post_id = wp_insert_post($post);
   
   foreach($meta as $key=>$value){
    add_post_meta($new_post_id,  $key, $value[0]);
   }
			return true;
		}
	}
}

new Custom_Bulk_Action();