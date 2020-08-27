<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */

?>

<?php get_template_part('fields/services-field-grid'); ?>


<?php if(!get_field('expertise_disable') ){ ?>
<?php $terms = get_terms( array('expertise_categories') );  ?>
<?php  if (is_array($terms) && count($terms)) { ?>
    <div class="expertise-section">
        <div class="expertise-banner" style="background: url('<?php echo get_field('expertise_banner'); ?>') 0 0 no-repeat;background-size: cover;"></div>
        <div class="expertise-wrap employee-wrap clearfix container">
            <div class="sec-bg"></div>
                <div class="left-exp">
                    <h3><?php echo get_field('expertise_title'); ?></h3>
                    <div class="mCustomScrollbar expertise-description" data-mcs-theme="dark"><?php echo get_field('summary'); ?></div>
                    <div class="btn-wrapper">
                        <?php  foreach($terms as $key => $term){ 
                                if($key%2 == 0){
                                    $btnClass = 'trnsprnt-btn-blue';
                                }else{
                                    $btnClass = 'trnsprnt-btn-green';
                                    $jobClass = 'btn-job';
                                }
                        ?>
                            <div class="browse-<?php echo $term->slug; ?> <?php echo $jobClass; ?>">
                                <a data-target="<?php echo $term->slug; ?>" href="#right-exp" class="btn <?php echo $btnClass; ?> <?php echo $jobClass; ?> btn-lg tab-buttons" id="<?php echo $term->slug; ?>">Browse by <?php echo $term->name; ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="right-exp" id="right-exp">
                    <?php 
                    foreach($terms as $term){
                        $args = array(  'post_type' => 'expertise', 
                                        'posts_per_page' => 20, 
                                        'post_status' => 'publish',
                                        'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'expertise_categories',
                                                            'field' => 'term_id',
                                                            'terms' => $term->term_id,
                                                            'name' => $term->term_name,
                                                        )
                                                    ) );
                        $industries = get_posts( $args );   
                    ?>
                        <div class = "<?php if($term->slug == 'industries') { echo 'ind_wrap'; } else {echo 'job_role_wrap';}?> clearfix">
                            <?php foreach($industries as $key=>$industry){ ?>
                             <?php 
                                $catId = get_field('category_id', $industry->ID);
                                $perma = get_permalink(get_post($industry->ID));
                                if($catId) $perma = $perma . "#/filteredjobs/" .$catId;                            
                            ?>
                                <div class="exp-box tab-items <?php echo $term->slug; ?> <?php if($key%2) echo "gray-opaque"; else echo "opaque";?>"> 
                                    <div class="content-box">
                                        <a href="<?php echo $perma; ?>" class="content-box-wrap">
                                            <div class="exp-logo">
                                                <img src="<?php echo get_field('expertise_logo_image', $industry->ID); ?>"><h5><?php echo  get_the_title($industry); ?></h5>
                                            </div>
                                            <div class="content-txt">
                                                <p><?php echo theme_the_excerpt( get_the_excerpt($industry), 30); ?></p>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="<?php echo $perma; ?>" class="exp-logo">
                                        <img src="<?php echo get_field('expertise_logo_image', $industry->ID); ?>"><h5><?php echo  get_the_title($industry); ?></h5>
                                    </a>
                                </div> 
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>  
        </div>
    </div>
<?php } ?>
<?php } ?>

<?php get_template_part('fields/success-field'); ?>

<?php get_template_part('fields/career-advice-single'); ?>

<?php get_template_part('fields/survey-field'); ?>

<?php get_template_part('fields/testimonial-slider'); ?>

<?php get_template_part('fields/content-item-list'); ?>



