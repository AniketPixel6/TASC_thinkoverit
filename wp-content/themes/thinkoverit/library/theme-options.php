<?php
function theme_send_to_editor( $html, $id, $attachment ) {

    if(strstr($html, '<a')){
     return str_replace( '<a href', '<a data-id="' . $id . '" href', $html );
    } else if(strstr($html, '<img')){
     return str_replace( '<img', '<img data-id="' . $id . '"', $html );
    }else{
     return '<span data-id="' . $id . '">'.$html.'</span>';
    }
}
add_filter( 'media_send_to_editor', 'theme_send_to_editor', 10, 3 );

add_action( 'admin_menu', 'theme_options_page' );
function theme_options_page() {
	add_options_page( 'Theme Options', 'Theme Options', 'manage_options', 'toit_theme', 'render_theme_settings' );

//if ( get_magic_quotes_gpc() ) {

    $_POST      = array_map( 'stripslashes_deep', $_POST );
    $_GET       = array_map( 'stripslashes_deep', $_GET );
    $_COOKIE    = array_map( 'stripslashes_deep', $_COOKIE );
    $_REQUEST   = array_map( 'stripslashes_deep', $_REQUEST );
//}

 global $allowedposttags;
 
 $custom_allowedtags["embed"] = array(
	      "src" => array(),
	      "type" => array(),
	      "allowfullscreen" => array(),
	      "allowscriptaccess" => array(),
	      "height" => array(),
	      "width" => array()
	      );
 $custom_allowedtags["iframe"] = array(
	      "src" => array(),
	      "type" => array(),
	      "allowfullscreen" => array(),
	      "allowscriptaccess" => array(),
	      "height" => array(),
	      "width" => array()
	      );
	$custom_allowedtags["script"] = array();
 $allowedposttags = array_merge($custom_allowedtags, $allowedposttags);
}

 $theme_options= array( 
					  "header_footer" => array(
						   "name" => "header_footer",
						   "title" => "General",
						   "description" => "",
						   "type" => "tab_start",
						   "class" => "theme-tab"),
					  "theme_company_logo" => array(
						   "name" => "theme_company_logo",
						   "std" => array(),
						   "title" => "Company Logo",
						   "description" => " ",
						   "type" => "images",
						   "multiple"=> false,
					  	  "class" => "logo-url"),
					  "theme_company_email" => array(
						   "name" => "theme_company_email",
						   "std" => "",
						   "title" => "Company Email",
						   "description" => " ",
						   "type" => "text",
						   "multiple"=> false,
					  	   "class" => "phone"),
					  "theme_company_phone" => array(
						   "name" => "theme_company_phone",
						   "std" => "",
						   "title" => "Company Phone",
						   "description" => " ",
						   "type" => "text",
						   "multiple"=> false,
					  	   "class" => "phone"),

      
  

						   
   );
function render_theme_settings() {

  global $theme_options;
  
  $theme_options = apply_filters( 'theme_options_set', $theme_options );

?>
 <div class="theme-settings-container">
  <form class="theme-settings-form" action="" method="post" enctype="multipart/form-data" name="subform">
  <?php 	wp_nonce_field( 'theme_nonce_action_update', 'theme_nonce_update'); ?>
		<ul class="theme-settings-tabs">
<?php
    foreach($theme_options as $options){

     switch($options['type'])
     {
      case 'tab_start':
       echo '<li data-index="'.$options['name'].'">'.$options['title'] .'</li>';			
      break;
     }
    }
 
?>
		</ul> 
<script>
   jQuery(document).ready(function($) {
    jQuery('.theme-settings-tabs li').click(function(){
     var id = jQuery(this).attr('data-index');	     
     jQuery('.theme-settings-tab').hide();
     jQuery(this).siblings().removeClass('tab-active');
     jQuery('#'+id).show();
     jQuery(this).addClass('tab-active');
	   });
    jQuery('.theme-settings-tab').hide();
    jQuery('.theme-settings-tab').removeClass('tab-active');
    jQuery('.theme-settings-tabs li:first').trigger('click');
    jQuery('.theme-settings-tabs li:first').addClass('tab-active');
	 });
</script>
<?php 
    foreach($theme_options as $index=>$options){
    
     $options_value = get_option($options['name'].'_value');

     switch($options['type'])
     {
      case 'tab_start':
       echo '<div class="theme-settings-tab" id="'.$options['name'].'" >';
       echo '<table class="theme-settings-form">';
      break;
      
      case 'text':
       echo'<tr><th class="theme-custompost-option-title"><label for="'.$options['name'].'_value">'.$options['title'] .'</label>';
       echo'<p>'.$options['description'].'</p></th>';
       if($options_value == "")
          $options_value = $options['std'];
       echo'<td class="theme-custompost-option-column"><input class="'.$options['class'].'"  type="text" name="'.$options['name'].'_value" value="'.esc_attr($options_value).'" size="40" /></td>';
       echo '</tr>';
      break;
      
      case 'textarea':
       echo'<tr><th class="theme-custompost-option-title"><label for="'.$options['name'].'_value">'.$options['title'] .'</label>';
       echo'<p>'.$options['description'].'</p></th>';
       if($options_value == "")
               $options_value = $options['std']; 
       echo '<td class="theme-custompost-option-column"><textarea class="'.$options['class'].'"  name="'.$options['name'].'_value"  size="40" >'.esc_textarea($options_value).'</textarea> </td>';
       echo '</tr>';
      break;
      
      case 'color':
       echo'<tr><th class="theme-custompost-option-title"><label for="'.$options['name'].'_value">'.$options['title'] .'</label>';
       echo'<p>'.$options['description'].'</p></th>';
       if($options_value == "")
           $options_value = $options['std'];
       echo'<td class="theme-custompost-option-column"><input class="color '.$options['class'].'"  type="text" name="'.$options['name'].'_value" value="'.esc_attr($options_value).'" size="40" /></td></tr>';
       echo '</tr>';
      break;
      
      case 'images':
      case 'files'://Files of any Type
       echo'<tr><th class="theme-custompost-option-title"><label for="'.$options['name'].'_value">'.$options['title'] .'</label>';
       echo'<p>'.$options['description'].'</p></th>';
           echo'<td class="theme-custompost-option-column">';
       if(!count($options_value))
        $options_value = $options['std'];
       echo '<ul id="'.$options['name'].'">';
       if(is_array($options_value)){
          foreach($options_value as $image_id)
          {
            echo '<li id="img_'.$image_id.'" class="theme-custompost-image-list-item">';
            if(theme_checkif_image($image_id)){
             $image_src = wp_get_attachment_image_src( $image_id, array(50,50));
             echo '<img id="book_image" src="'.$image_src[0].'" style="max-width:100%;" />';
            }else{
             $url = wp_get_attachment_url( $image_id );
             $attachment = get_post( $image_id );
             echo '<a href="' .$url . '" target="_blank">'.$attachment->post_title.'</a>';
            }
            echo '<span><input type="hidden" name="'.$options['name'].'_value[]" value="'.esc_attr($image_id).'" /><input class="remove" type="button" value="Remove" onclick="removeInfoGraphic('.$image_id.');"/></span></li>';							
          }
       }else if(!empty($options_value)){
         echo '<li id="img_'.$options_value.'" class="theme-custompost-image-list-item">';
         if(theme_checkif_image($options_value)){
          $image_src = wp_get_attachment_image_src( $options_value, array(50,50));
          echo '<img id="book_image" src="'.$image_src[0].'" style="max-width:100%;" />';
         }else{
             $url = wp_get_attachment_url( $options_value );
             $attachment = get_post( $options_value );
             echo '<a href="' . $url . '" target="_blank">'.$attachment->post_title.'</a>';
         }
         echo '<input class="remove" type="hidden" name="'.$options['name'].'_value" value="'.esc_attr($options_value).'" />';
         echo '</li>';
       }
       echo '</ul>';
       echo'<div class="theme-options-item-addimage"><a href="#" id="set_'.$options['name'].'">Add New</a></div>';
?>
       <script  type="text/javascript">
        jQuery(document).ready(function($){
          window.send_to_editor_default = window.send_to_editor;

          jQuery('#set_<?php echo $options['name']; ?>').click(function()
          {
           window.send_to_editor = function(html) 
           {
           
             jQuery('body').append('<div id="temp_image">' + html + '</div>');

             var atag = jQuery('#temp_image').find('a');
             var img = jQuery('#temp_image').find('img');

             var attachment_id = $(html).data('id'), imgid=0;

             if(attachment_id)
              imgid = attachment_id;
             else if(!imgid && atag.attr('rel'))
              imgid    = parseInt(atag.attr('rel').replace(/\D/g, ''), 10);
             else if(!imgid && img.attr('class'))
              imgid    = parseInt(img.attr('class').replace(/\D/g, ''), 10);
         
             if(img.length && imgid){
              imgurl   = img.attr('src');
              imgclass = img.attr('class');
              
              <?php if(isset($options['multiple']) && $options['multiple']) { ?>
              jQuery('#<?Php echo $options['name']; ?>').append('<li id="img_'+imgid+'"><img id="book_image" src="'+imgurl+'" /><input type="hidden" name="<?Php echo $options['name']; ?>_value[]" value="'+imgid+'" /></li><li><a href="javascript:void(0);" onclick="removeInfoGraphic('+imgid+');">Remove</a></li>');
              <?php }else{ ?>
              jQuery('#<?Php echo $options['name']; ?>').html('<li id="img_'+imgid+'"><img id="book_image" src="'+imgurl+'" /><input type="hidden" name="<?Php echo $options['name']; ?>_value" value="'+imgid+'" /></li><li><a href="javascript:void(0);" onclick="removeInfoGraphic('+imgid+');">Remove</a></li>');
              <?php } ?>
              
             }else{
              <?php if($options['multiple']) { ?>
              jQuery('#<?Php echo $options['name']; ?>').append('<li id="img_'+imgid+'">'+strip_tags(html)+'<input type="hidden" name="<?Php echo $options['name']; ?>_value[]" value="'+imgid+'" /></li><li><input type="button" value="Remove" onclick="removeInfoGraphic('+imgid+');"/></li>');
              <?php }else{ ?>
              jQuery('#<?Php echo $options['name']; ?>').html('<li id="img_'+imgid+'">'+strip_tags(html)+'<input type="hidden" name="<?Php echo $options['name']; ?>_value" value="'+imgid+'" /></li><li><input type="button" value="Remove" onclick="removeInfoGraphic('+imgid+');"/></li>');
              <?php } ?>
             }
             try{tb_remove();}catch(e){};
             jQuery('#temp_image').remove();
             
             window.send_to_editor = window.send_to_editor_default;
           }
           tb_show('', 'media-upload.php?amp;type=image&amp;TB_iframe=true');
           return false;
          });
        });
        function strip_tags (input, allowed) {

          allowed = (((allowed || "") + "").toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join("");
          var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
            commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
          return input.replace(commentsAndPhpTags, "").replace(tags, function ($0, $1) {
            return allowed.indexOf("<" + $1.toLowerCase() + ">") > -1 ? $0 : "";
          });
        }
        function removeInfoGraphic(id){
         jQuery('#img_'+id).remove();
         return false;
        }
       </script>
<?php  echo '</td>';
       echo '</tr>';
      break;
      case 'checkbox':
        echo'<tr><th class="theme-custompost-option-title"><label for="'.$options['name'].'_value">'.$options['title'] .'</label>';
        echo'<p>'.$options['description'].'</p></th>';
        if(is_array($options['std'])){
         foreach($options['std'] as $row)
         {
          $checked = "";
          if(is_array($options_value)) if(in_array($row, $options_value)) $checked = 'checked="checked"';
          else if(is_string($options_value) && $row == $options_value) $checked = 'checked="checked"';
      
          echo '<td class="theme-custompost-option-column"><label><input class="'.$options['class'].'"  '.$checked.' type="checkbox" name="'.$options['name'].'_value[]" value="'.esc_attr($row).'" />'.$row.'<label></td>';
         }
        }else{
          if($options['std'] == $options_value) $checked = 'checked="checked"';
          else $checked  = "";
          echo '<td class="theme-custompost-option-column"><input class="'.$options['class'].'"  '.$checked.'  type="checkbox" name="'.$options['name'].'_value" value="'.esc_attr($options['std']).'" /></td>';
        }
        echo '</tr>';
      break;
      
      case 'select':
        echo'<tr><th class="theme-custompost-option-title"><label for="'.$options['name'].'_value">'.$options['title'] .'</label>';
        echo'<p>'.$options['description'].'</p></th>';
        if(is_array($options['std'])){
            echo '<td class="theme-custompost-option-column"><select name="'.$options['name'].'_value" id="'.$options['name'].'_value">';
            foreach($options['std'] as $rowdata)
            {
                $selected = "";
                if(is_string($options_value) && $rowdata == $options_value) $selected = 'selected="selected"'; 
                echo  '<option value="'.esc_attr($rowdata).'" '.$selected.'>'.esc_attr($rowdata).'</option> ';          
            }
            echo '</select></td>';
            }
        echo '</tr>';
        break;
      case 'tab_end':
       echo '</table>';
       echo '</div>';
      break;  
     }  
}
?>

<input type="submit" class="button button-primary" name="theme_options_settings" id="theme_options_settings" value="Save" />
</form>
</div>
<?php }

add_action( 'admin_init', 'save_theme_options' );         
       
/* Save Our custom posts Only Meta Data   */
function save_theme_options( ) {
 global $allowedposttags;

	if(isset($_POST['theme_options_settings'])){
 
  check_admin_referer( 'theme_nonce_action_update', 'theme_nonce_update');

		global $theme_options;
  
		foreach($theme_options as $option) {

     if(!isset($_POST[$option['name'].'_value'])) {
         delete_option($option['name'].'_value');
         continue;
     }

     $data = $_POST[$option['name'].'_value'];

     //sanitize POST data
     if($option['type'] == 'textarea'){
      $data = wp_kses_post($data);
     }elseif($option['type'] == 'editor'){
      $data = wp_kses_post($data);
     } else if($option['type'] == 'text'){
      $data = sanitize_text_field($data);
     }
     update_option($option['name'].'_value', $data);
	 }
	}

}
function admin_theme_stylesheets() {
 wp_enqueue_script('media-upload');
 wp_enqueue_script('theme-colorjs', get_bloginfo('stylesheet_directory'). '/library/jscolor/jscolor.js');
 wp_enqueue_style('theme-admin-style', get_bloginfo('stylesheet_directory')  . '/library/css/admin-style.css');
 wp_enqueue_style( 'media-views' );
 wp_enqueue_style('thickbox');
}
add_action('admin_enqueue_scripts','admin_theme_stylesheets');

function theme_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'thinkoverit' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', 'theme_wp_title', 10, 2 );

function theme_custom_stylesheets() {
	//CSS   
    $head_image_src = wp_get_attachment_image_src( get_option('theme_header_bg_image_value'), 'full'); 
    $foot_image_src = wp_get_attachment_image_src( get_option('theme_footer_bg_image_value'), 'full');
    $foot_bag_color= get_option('theme_footer_bg_value'); 
    $head_bag_color= get_option('theme_header_bg_value');     
    $link_color= get_option('theme_link_color_value');
    $link_hover_color= get_option('theme_link_hover_color_value');	
    $custom_css = "";
				
    if(isset($link_color) && !empty($link_color)){
        $custom_css .= "body a{
            color: #{$link_color};  
        }";
    }
    if(isset($link_hover_color)&& !empty($link_hover_color)){
        $custom_css .= "body a:hover{
            color: #{$link_hover_color};  
        }";
    }
    
    if(isset($foot_bag_color) && !empty($foot_bag_color)){
        $custom_css .= "footer{
            background-color: #{$foot_bag_color};  
        }";  
    }
?>
<style>
    <?php echo $custom_css ; ?>
    <?php echo get_option('theme_custom_css_value'); ?>
</style>  
<?php       
}

add_action('wp_head','theme_custom_stylesheets');

function print_theme_inline_script() {
  echo get_option('theme_google_analtylics_code_value'); 
}
add_action( 'wp_head', 'print_theme_inline_script' );


function theme_checkif_image($post_id){
 $type = get_post_mime_type($post_id);

 switch ($type) {
   case 'image/jpeg':
   case 'image/png':
   case 'image/gif':
     return true;
   case 'video/mpeg':
   case 'video/mp4': 
   case 'video/quicktime':
     return false;
 }
}

