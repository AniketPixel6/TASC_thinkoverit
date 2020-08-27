<?php

/*****
Input: $slug = post type slug
       $args =  $args for Post type.
       $meta_box = meta box definations.
****/
$theme_post_types = array();

function theme_create_post_type($slug, $args, $meta_boxes=array(), $taxonomies=array()){
 global $theme_post_types;
 
 $theme_post_types[$slug]['args'] = $args;
 $theme_post_types[$slug]['meta_boxes'] = $meta_boxes;
 $theme_post_types[$slug]['taxonomies'] = $taxonomies;

 add_action( 'init', 'theme_register_post_type' );
 add_action( 'add_meta_boxes', 'theme_add_post_meta_boxes' );
}

function theme_register_post_type() {
 global $theme_post_types;
 
 foreach($theme_post_types as $slug=>$data){
 
  if(in_array($slug, array('page', 'post'))) continue;
  
  register_post_type( $slug, $data['args'] );
  
  if(count($data['taxonomies'])){
   foreach($data['taxonomies'] as $taxslug=>$taxargs){
    register_taxonomy($taxslug, $slug,  $taxargs );
   }
  }
 }
}

function theme_add_post_meta_boxes() {
 global $theme_post_types;
 
 foreach($theme_post_types as $slug=>$data){
  if(!empty($data['meta_boxes'])){
       add_meta_box(
       $slug.'_metabox',
       __( ucwords($slug). ' Meta Data'),
       'theme_add_metabox',
       $slug,
       'normal',
       'low', 
       array( 'meta_boxes' => $data['meta_boxes'])
      );
  }
 }
}

function theme_add_metabox( $post, $metabox ) 
{
  render_metaboxes($metabox['args']['meta_boxes']);
}

function render_metaboxes($meta_boxes) {

 global $post;
?>
  <div class="theme-custom-post-meta-boxes">
  <table class="theme-custompost-metaboxes-table">
<?php 
    foreach($meta_boxes as $options){
    
     $options_value = get_post_meta($post->ID, $options['name'].'_value', true);

     echo'<tr class="theme-custompost-metaboxes-row"><th class="theme-custompost-option-title"><label for="'.$options['name'].'_value">'.$options['title'] .'</label>';
     echo'<br/><em>'.$options['description'].'</em></th>';

     switch($options['type'])
     {
       case 'color'://Color Type
         if($options_value == "")
             $options_value = $options['std'];
         echo'<td class="theme-custompost-option-column"><input class="color '.$options['class'].'"  type="text" name="'.$options['name'].'_value" value="'.esc_attr($options_value).'" size="40" /></td>';
       break;
     
       case 'images'://Images Type
       case 'files'://Files of any Type
          echo'<td class="theme-custompost-option-column '.$options['class'].'" >';
          if(!count($options_value))
              $options_value = $options['std'];
          echo '<ul id="'.$options['name'].'" class="theme-custompost-image-list clearfix">';
          if(is_array($options_value)){
           foreach($options_value as $image_id){
           
            echo '<li id="img_'.$image_id.'" class="theme-custompost-image-list-item">';
            if(theme_checkif_image($image_id)){
             $image_src = wp_get_attachment_image_src( $image_id, array(50,50));
             echo '<img id="book_image" src="'.$image_src[0].'" style="max-width:100%;" class="theme-custompost-item-list-item" />';
            }else{
             $url = wp_get_attachment_url( $image_id );
             $attachment = get_post( $image_id );
             echo '<a href="' .$url . '" target="_blank">'.$attachment->post_title.'</a>';
            }


            echo '<span><input  type="hidden" name="'.$options['name'].'_value[]" value="'.esc_attr($image_id).'" /><input class="toit-remove-button" type="button" value="Remove" onclick="removeInfoGraphic('.$image_id.');"/><span></li>';							
           }
          }else if(!empty($options_value)){     
            echo '<li id="img_'.$options_value.'" class="theme-custompost-image-list-item">';
            if(theme_checkif_image($options_value)){
             $image_src = wp_get_attachment_image_src( $options_value, array(50,50));
             echo '<img id="book_image" src="'.$image_src[0].'" style="max-width:100%;" class="theme-custompost-item-list-item" />';
            }else{
             $url = wp_get_attachment_url( $options_value );
             $attachment = get_post( $options_value );
             echo '<a href="' . $url . '" target="_blank">'.$attachment->post_title.'</a>';
            }          
            echo '<span><input class="remove" type="hidden" name="'.$options['name'].'_value" value="'.esc_attr($options_value).'" /><input class="toit-remove-button" type="button" value="Remove" onclick="removeInfoGraphic('.$options_value.');"/><span>';
            echo '</li>';
          }
          echo '</ul>';
          echo'<div class="theme-custompost-item-addbutton"><input type="button" value="Add New" id="set_'.$options['name'].'" class="theme-custompost-add-image"></div>';
?>
<script>
     jQuery(document).ready(function($) 
     {
      
      window.send_to_editor_default = window.send_to_editor;

      jQuery('#set_<?php echo $options['name']; ?>').click(function(){
       window.send_to_editor = function(html) {
       
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

         <?php if($options['multiple']) { ?>
         jQuery('#<?Php echo $options['name']; ?>').append('<li id="img_'+imgid+'"><img id="book_image" src="'+imgurl+'" /><input type="hidden" name="<?Php echo $options['name']; ?>_value[]" value="'+imgid+'" /></li><li><input type="button" value="Remove" onclick="removeInfoGraphic('+imgid+');"/></li>');
         <?php }else{ ?>
         jQuery('#<?Php echo $options['name']; ?>').html('<li id="img_'+imgid+'"><img id="book_image" src="'+imgurl+'" /><input type="hidden" name="<?Php echo $options['name']; ?>_value" value="'+imgid+'" /></li><li><input type="button" value="Remove" onclick="removeInfoGraphic('+imgid+');"/></li>');
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
     function removeInfoGraphic(id){
      jQuery('#img_'+id).remove();
      return false;
     }
</script>
<?php     echo '</td>';
       break;
       case 'checkbox'://checkbox Type
          echo '<td class="theme-custompost-option-column">';
          echo '<ul id="'.$options['name'].'" class="theme-custompost-item-list">';
          if(is_array($options['std'])){
           foreach($options['std'] as $key=>$row){
            $checked = "";
            if(is_array($options_value)) if(in_array($key, $options_value)) $checked = 'checked="checked"';
            else if(is_string($options_value) && $key == $options_value) $checked = 'checked="checked"';
            
            echo '<li><input class="'.$options['class'].'"  '.$checked.' type="checkbox" id="'.$options['name'].'_value_'.$key.'" name="'.$options['name'].'_value[]" value="'.esc_attr($key).'" />'.$row.'</li>';
           }

          }else{
            if($options['std'] == $options_value) $checked = 'checked="checked"';
            else $checked  = "";
            echo '<li><input class="'.$options['class'].'"  '.$checked.'  type="checkbox" name="'.$options['name'].'_value" value="'.$options['std'].'" /></li>';
          }
          echo '</ul>';
          echo '</td>';
       break;
       case 'text'://Text Type
          if($options_value == "")
              $options_value = $options['std'];
          echo'<td class="theme-custompost-option-column"><input class="'.$options['class'].'"  type="text" name="'.$options['name'].'_value" value="'.esc_attr($options_value).'"  style="width: 100%;" /></td>';
       break;
       case 'links'://Links Type
          echo '<td class="theme-custompost-option-column">';
          if($options_value == "")
              $options_value = $options['std'];
         
          echo '<ul id="'.$options['name'].'" class="theme-custompost-item-list">'; 
          if(is_array($options_value)){
            foreach($options_value as $index=>$link)
            {
             echo '<li id="link_'.$index.'" class="theme-custompost-item-list-item">';
             echo '<span>Link Title</span><input type="text" class="'.$options['class'].'" name="'.$options['name'].'_value[title][]" value="'.esc_attr($link['title']).'" />';
             echo '<br/><span>Link URL</span><input type="text" name="'.$options['name'].'_value[url][]" value="'.esc_attr($link['url']).'"/>';
             echo '<input class="remove" type="button" value="Remove" onclick="removeMetaValue('.$index.');"/></li>';
            }
          }
          echo '</ul>';
          echo'<div class="theme-custompost-item-addbutton"><input type="button" value="Add New" id="set_'.$options['name'].'"></div>';

?>
            <script  type="text/javascript">
             jQuery(document).ready(function($) {
             
              var linkIndex = <?php echo count($options_value); ?>;
              var linkMultiple = <?php if($options['multiple']) echo 1; else echo 0; ?>;
              jQuery('#set_<?php echo $options['name']; ?>').click(function() {
              alert("");
               jQuery('#<?php echo $options['name']; ?>').append('<li id="link_'+linkIndex+'"><span>Link Title</span><input type="text" name="<?php echo $options['name']; ?>_value[\'title\'][]" /><br/><span>Link URL</span><input type="text" name="<?php echo $options['name']; ?>_value[\'url\'][]" /><input class="remove" type="button" value="Remove" onclick="removeMetaValue(\'link_'+linkIndex+'\');"/></li>');
               linkIndex++;
               if(!linkMultiple)jQuery('#set_<?php echo $options['name']; ?>').hide();
               return false;
              });
             });
            </script>
<?php 
          echo '</td>';
      break;
      case 'textarea':
       echo'<td class="theme-custompost-option-column">';
       if($options_value == "")
               $options_value = $options['std']; 
       echo ' <textarea class="'.$options['class'].'"  name="'.$options['name'].'_value"  size="40" >'.esc_textarea($options_value).'</textarea>';
       echo '<td>';
      break;
      case 'wp_editor':
       echo'<td class="theme-custompost-option-column '.$options['class'].'" style="width: 100%;padding:30px 0;">';
       
       wp_editor($options_value, $options['name'].'_value', array('media_buttons' => true, 'textarea_rows' => 4));
       
       echo '</td>';
      break;
      case 'video'://Video Type
          echo'<td class="theme-custompost-option-column">';
           if($options_value == "")
               $options_value = $options['std'];
          echo '<ul id="'.$options['name'].'" class="theme-custompost-item-list">';
          if(is_array($options_value)){
            foreach($options_value as $index=>$video)
            {
             echo '<li id="video_'.$index.'" class="theme-custompost-item-list-item">';
             echo '<textarea class="'.$options['class'].'" name="'.$options['name'].'_value[]" >'.esc_textarea($video).'</textarea>';
             echo '<input class="toit-remove-button" type="button" value="Remove" onclick="removeMetaValue(\'video_'.$index.'\');"/></li>';
            }
          }
          echo '</ul>';

           echo'<div class="theme-custompost-item-addbutton"><input type="button" value="Add New" id="set_'.$options['name'].'"></div>';
?>
            <script  type="text/javascript">
             jQuery(document).ready(function($) {
              var videoIndex = <?php echo count($options_value); ?>;
              var videoMultiple = <?php if($options['multiple']) echo 1; else echo 0; ?>;
              jQuery('#set_<?php echo $options['name']; ?>').click(function()
              {
               jQuery('#<?php echo $options['name']; ?>').append('<li id="video_'+videoIndex+'" class="theme-custompost-item-list-item"><textarea class="<?php echo $options['class']; ?>" name="<?php echo $options['name']; ?>_value[]"></textarea></li><li><input class="remove" type="button" value="Remove" onclick="removeMetaValue(\'video_'+videoIndex+'\');"/></li>');
               videoIndex++;
               if(!videoMultiple)jQuery('#set_<?php echo $options['name']; ?>').hide();
               return false;
              });
             });
            </script>
<?php
          echo'</td>';
        break;
       case 'select'://select Type
          if(is_array($options['std'])){
           echo '<td class="theme-custompost-option-column">';
           $onclick = '';
           if(isset($options['onclick'])) $onclick = 'onclick="'.$options['onclick'].'"';;
           echo '<select class="'.$options['class'].'" '.$onclick.' '.$checked.' id="'.$options['name'].'_value" name="'.$options['name'].'_value">';

           foreach($options['std'] as $key=>$row){
            $checked = "";
            if(is_string($options_value) && $key == $options_value) $checked = 'selected="selected"';

            echo '<option  '.$checked.' value="'.esc_attr($key).'" />'.$row.'</option>';
           }
           echo '</select></td>';
          }
       break;
     } 
     echo '</tr>';  
    }
 echo '</table>';
?>
      <script type="text/javascript">
        function strip_tags (input, allowed) {

          allowed = (((allowed || "") + "").toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join("");
          var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi,
            commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
          return input.replace(commentsAndPhpTags, "").replace(tags, function ($0, $1) {
            return allowed.indexOf("<" + $1.toLowerCase() + ">") > -1 ? $0 : "";
          });
        }
        function removeMetaValue(id){
         if(jQuery(id).length) jQuery(id).remove();
         return false;
        }
      </script>
<?php
 echo'</div>';
} 

add_action('save_post', 'save_postdata',1,2);
function save_postdata( $post_id, $post ) {

 if ( empty( $post_id ) || empty( $post ) || empty( $_POST ) ) return;
 if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
 if ( is_int( wp_is_post_revision( $post ) ) ) return;
 if ( is_int( wp_is_post_autosave( $post ) ) ) return;
 if ( ! current_user_can( 'edit_post', $post_id ) ) return;

 $meta_boxes =array();
 global $theme_post_types;
 
 foreach($theme_post_types as $slug=>$data){
  if($post->post_type == $slug && !empty($data['meta_boxes'])){
	$meta_boxes = $data['meta_boxes'];
  }
 }

if(!count($meta_boxes)) return;

	foreach($meta_boxes as $meta_box) {

  if(!isset($_POST[$meta_box['name'].'_value'])) {

      delete_post_meta($post_id, $meta_box['name'].'_value');
      continue;
  }
		$data = $_POST[$meta_box['name'].'_value'];
		//sanitize POST data
  if($option['type'] == 'textarea'){
      $data = wp_kses_post($data);
		}elseif($meta_box['type'] == 'editor' || $meta_box['type'] == 'wp_editor'  ){
		  $data = wp_kses_post($data);
		}else if(is_string($data)){
		 $data = sanitize_text_field($data);
		}

		//Update/Add/Delete Meta data.
		if(get_post_meta($post_id, $meta_box['name'].'_value') == "")
			add_post_meta($post_id, $meta_box['name'].'_value', $data, true);
		else if($data != get_post_meta($post_id, $meta_box['name'].'_value', true))
			update_post_meta($post_id, $meta_box['name'].'_value', $data);
		else if($data == "")
			delete_post_meta($post_id, $meta_box['name'].'_value', get_post_meta($post_id, $meta_box['name'].'_value', true));
	}

}
