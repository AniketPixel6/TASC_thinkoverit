<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */
    $image = get_the_post_thumbnail_url(get_the_ID(),'medium');
    $locked = get_field('report_locked', get_the_ID());
    $post_type = get_post_type( get_the_ID() );
    
    if($post_type == 'tasc_news'){
        $tags = wp_get_post_terms(get_the_ID(),'news_tags');
    }else{
        $tags = wp_get_post_terms(get_the_ID(),'success_stories_tags');
    }

?>
<div class="success-data <?php if($locked) echo "lock-cart"; ?>" data-file="<?php echo get_field('report_file', get_the_ID()) ?>" data-post="<?php echo get_the_ID(); ?>">
	<div class="success-wrapper">
		<div class="success-data-img">
			<img src="<?php echo $image ?>">
		</div>
		<div class="success-data-txt">
			<a href="<?php echo get_permalink(); ?>"><h4><?php echo get_the_title()?></h4></a>
			<a href="<?php echo get_permalink(); ?>" class="lock-icon"></a>
			
			<div class="success-data-content">
				<?php if ( is_single() || is_archive() || is_category()){ ?>
					<?php echo theme_the_excerpt(get_the_excerpt(), 20); ?>
				<?php }else{ ?>
					<?php echo get_the_content(); ?>
				<?php } ?>
			</div>
			<div class="read-download clearfix">
				<ul class="tag-list">
					<?php foreach($tags as $key=>$tag){  if ($key == 2) break; ?> 
						<li><?php echo $tag->name; ?></li>
					<?php } ?>
				</ul>
				<a href="<?php echo get_permalink(); ?>" class="read-more"><u><?php _e("Read More", 'tasc'); ?></u></a>
			</div>
		</div>
	</div>	
</div>
					