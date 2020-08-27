<div class="container">
	<div class="detail-wrap clearfix">
	
			<h1 class="center-title"><?php echo get_the_title(); ?></h1>
			<!-- <?php //the_content(); ?> -->
								<?php if(get_field( 'requirement') ) { ?>
				<div class="story-requirement-sec">

				    	<div class="story-img">
							<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
						</div>
						<div class="requirement-block">
							<div class="requirement-inner">
								<h5 class="bold-text">Requirement</h5> 
								<?php the_field( 'requirement' ); ?>
								<div class="requirement-footer clearfix">
									<div class="client">
										<span>Client:</span>
										<strong><?php the_field( 'client_name' ); ?></strong>
									</div>
									<div class="duration">
										<span>Duration:</span>
										<strong><?php the_field( 'duration' ); ?></strong>
									</div>

								</div>
							</div>
						</div>						
					
				</div>
				<?php } ?>
				<?php if(get_field( 'our_approach') ) { ?>

				<div class=" our-approach-sec">
					<h5 class="bold-text"> Our Approach</h5> 
					<?php the_field( 'our_approach' ); ?>
				</div>
				<?php } ?>
		
	</div>	
</div>

<?php $success_tags = wp_get_post_terms(get_the_ID(),'success_stories_tags'); 
	if($success_tags){
?>

<div class=" diverse-block">
	<div class="container clearfix">
		<h5 class="diverse-heading">Diverse Nationalities recruited</h5>
		
		<div class="recruited-facts-list">
			<ul class="tag-list">
				<?php foreach($success_tags as $key=>$success_tag){ ?> 
					<li><?php echo $success_tag->name; ?></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php }?>
<?php if( get_field( 'success_quick_facts') ){?>
<div class="success-content clearfix">
	<div class="container">
		
		<div class=" quick-facts">
			<h5 class="facts-heading">Success Quick Facts</h5>
			<?php the_field( 'success' ); ?>
		</div>
		<div  class="success-facts-slider">
			<?php 
			while( has_sub_field( 'success_quick_facts') ){?>
				    	<div class="success-fact-item">
				    		<div class="success-fact-inner">
						       <div class="success-img"><img src="<?php the_sub_field('facts_image' );?>"/></div>
						    	<span class="success-num">
						    		<?php if (empty (get_sub_field('facts_number' )) ) {
						    			echo 0;
						    		}else{
						    			echo the_sub_field('facts_number' );
						    		}?>
						    	</span>
						    	<h5 class="slide-label"><?php the_sub_field('facts_label' ); ?></h5>
					    	</div>
								   
					    	</div>
				        

				    <?php }

				
				?>

		</div>
		
	</div>
</div>
<?php }?>
<?php //get_template_part('fields/download-file'); ?>
<?php get_template_part('fields/request-proposal-field'); ?>
<?php //get_template_part('fields/testimonial-slider'); ?>