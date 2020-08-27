<?php 
    if(!get_field('testimonial_disable') ) { 

    $testimonials = get_field('testimonial');

    if (is_array($testimonials) && count($testimonials)) { ?>

        <div class="landing-card-section <?php if(is_page('work-with-us')){ echo "post-card-section"; } ?>" >
            <div class="card-slider-wrap <?php if(is_page('work-with-us')){ echo "container"; } ?>">

                <div class="card-slider-wrapper">
                    <?php 
                        foreach($testimonials as $key=>$testimonial){
                      
                            if(!empty(get_field('testimonial_video_url', $testimonial->ID))){ 
                                $url = get_field('testimonial_video_url', $testimonial->ID);
                                $videoImage = get_youtube_image($url);

                                if($url){
                                    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
                                    $videoId = $matches[1];
                                    $html = 'https://www.googleapis.com/youtube/v3/videos?id='.$videoId.'&key=AIzaSyABELyzmgLzU6h74tUMHIljeitmXjAwCQk&part=snippet';
                                    $response = file_get_contents($html);
                                    $decoded = json_decode($response, true);
                                    $videoTitle= $decoded['items'][0]['snippet']['title'];
                                }
                                

                                if($videoImage){
                                    $image = $videoImage;
                                }else{
                                    $image = wp_get_attachment_url( get_post_thumbnail_id($testimonial->ID));
                                }
                             }
                    ?>  
                        <div class="card-slider">
                            <?php if(!empty(get_field('testimonial_video_url', $testimonial->ID))) { ?>
                                <a data-fancybox="video" href="<?php echo $url; ?>" class="clearfix">
                                    <div class="test-data-img">
                                        <img src="<?php echo  $image; ?>" alt="Image" />
                                        <span class="youtube-icon"></span>
                                    </div>
                                </a>
                            <?php } else { ?>
                                <?php if(is_page('work-with-us')){ ?>
                                    <?php $featureImg = wp_get_attachment_url( get_post_thumbnail_id($testimonial->ID)); ?>
                                    <div class="testimonial-img"><img src="<?php echo $featureImg; ?>" alt="<?php echo get_the_title($testimonial); ?>" /></div>
                                    <p><?php echo $testimonial->post_content; ?></p>
                                    <span><?php echo get_the_title($testimonial); ?> - <?php echo get_field('testimonial_designation', $testimonial); ?></span>
                                <?php }else{ ?>
                                    <div class="green-quote"></div>
                                    <p><?php echo theme_the_excerpt($testimonial, 40); ?></p>
                                    <span><?php echo get_the_title($testimonial); ?></span>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php } ?>  
                </div>

				<?php if(get_field('testimonial_listing_link')){ ?>
					<div class="btn blue-btn lower-case">
						<a href="<?php echo get_field('testimonial_listing_link'); ?>"><?php _e("See All", 'tasc'); ?></a>
					</div>
				<?php } ?>  

            </div>  
        </div>

    <?php } } ?>
 