<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tasc
 */


$image = get_the_post_thumbnail_url(get_the_ID(),'medium');
$_bullhorn_job_id = get_post_meta(get_the_id(), '_bullhorn_job_id', true);
$cities = get_the_terms( get_the_ID(), 'job_location_city');
$employment_type = get_the_terms( get_the_ID(), 'employment_type');
$job_category = get_the_terms( get_the_ID(), 'job_category');
$states = get_the_terms( get_the_ID(), 'job_location_state');
$meta= get_post_meta(get_the_ID());

if($states){
	foreach($states as $key=>$location) 
		{
		 $state=$location->name; 
		}
}else{
	$state="";
}
?>


<!-- start-->
<div>
    <div class="single-details-wrapper">
        <div class="container">
            <div class="single-job-details" >
              <main></main>
          	  <div ng-controller="JobViewController as detail" job-id="<?php echo $_bullhorn_job_id; ?>">
                <div ng-include="'app/detail/view.html'"></div> 
              </div>
              
                <div class="job-info-wrapper" style="display: none;">
                    <h4><?php echo get_the_title() ?></h4>                   
                    <div class="job-info">
                    	<?php if($cities){
                    	 foreach($cities as $key=>$location) { $city= $location->name;}
                    	}else{
                    		$city="";
                    	}?>
                        <span class="location icon-before"><?php  echo $city;  ?></span> 
                        <span class="postedon icon-before">Posted On - <strong> <?php echo get_the_date();?></strong></span>
                    </div>
                </div>  
                <div class="single-ind-wrapper clearfix">
                    <h5>Details</h5>
                    <div class="single-industry-details-wrap clearfix">
                    	<?php if($job_category){?>
                        <div class="single-industry-details">
                            <p>Industry</p>
                            <?php foreach($job_category as $key=>$cat) {
                                $category =$cat->name;  
                            ?>
						                	<span><?php  echo $category ?></span> 
                            <?php } ?>                           
                        </div>
                    <?php } ?>
                    <?php if($employment_type){?>
                        <div class="single-industry-details single-type-details">   
                            <p>Type</p>
                            <?php foreach($employment_type as $key=>$type){ 
                              $emp_type=$type->name;   
                            ?>
								              <span><?php echo $emp_type?></span>
                            <?php } ?>
                        </div>
                    <?php } ?>
                    </div>                    
                </div>       
                    <div class="job-description">
                        <p><?php echo get_the_content();?></p>
                    </div>                    
            </div>
        </div>
    </div>   
</div>


<!-- end-->

<!-- Relate job section start -->
<?php if($job_category){ ?>
<div class="card-section">
    <div class="container clearfix">
    	<?php foreach($job_category as $key=>$relatedcategory) {?>
							
    	<h3 class="ng-binding">Related <?php  echo $relatedcategory->name; }?> Jobs</h3>
		<?php 
            $terms = get_the_terms( get_the_ID(), 'job_category'); 
            $job_category = get_the_terms( get_the_ID(), 'job_category');

            $termsIds = [];
			foreach ( $job_category as $relatedcategory ) {
                $termsIds[] = $relatedcategory->term_id;
            }
			$relatedPosts = get_posts(
			    array(
			        'post_type' => 'job',
			        'posts_per_page' => 3,
			        'post__not_in'     => array(get_the_ID(),),
			        'tax_query' => array(
			            array(
			                'taxonomy' => 'job_category',
			                'field' => 'term_id',
			                'terms' => $termsIds,
			            )
			        )
			    )
			);
            foreach($relatedPosts as $key=>$realated){
            	
				//$states = get_the_terms( $realated->ID, 'job_location_state');
				$cities = get_the_terms( $realated->ID, 'job_location_city');
				$employment_type = get_the_terms( $realated->ID, 'employment_type');
				$job_category = get_the_terms( $realated->ID, 'job_category');
				
        ?>  
			<div class="job-details-wrapper job-details-cards" >
			  	<a class="job-details-link" href="<?php echo get_permalink($realated->ID); ?>">
			      	<div class="job-name openings">
						<h5><?php echo get_the_title($realated->ID);?></h5>
						<?php if($cities){
							foreach($cities as $key=>$relatedcity) {?>
							<span> <?php  echo $relatedcity->name; ?></span>
						<?php }} ?>
					</div>
					<div class="industry-details-wrapper openings clearfix">
						<?php if($job_category){ ?>
			  			<div class="industry-details">
			      			<span>Industry</span>
			      		<?php foreach($job_category as $key=>$relatedcategory) {?>
							<span><?php  echo $relatedcategory->name;?></span>
						</div>
						<?php }} ?>
						<?php if($employment_type){ ?>
						<div class="industry-details">
							<span>Type</span>
						<?php foreach($employment_type as $key=>$type){  ?>
							<span><?php echo $type->name; ?></span>
						</div>
						<?php }} ?>
					</div> 
					<div class="blog-post-date openings clearfix">
						<p>Added- <span> <?php echo get_the_date('F j, Y',$realated->ID); ?></span></p>
						<span class="bhi-arrow-right"><u>Read More</u></span>
					</div>
				</a>
			</div>
		<?php } ?>	
	</div>
</div>
<?php } ?>
<!-- RElated job section end  -->
<!-- Get in touch section start -->
<div class="get-in-touch-section retail-get-in-touch">
	<div class="container retail-proposal">
		<h3>Don't see the Job you want? 
			<a href="https://www.tascoutsourcing.com/register-cv/#/registercv">Register your CV!</a>
		</h3> 
		<a href="https://www.tascoutsourcing.com/register-cv/#/registercv" class="btn green-btn">Register your CV!</a>
	</div>

</div>


<script type="application/ld+json">

{
  "@context": "http://schema.org",
  "@type": "JobPosting",
  "title": "<?php echo get_the_title();?>",
  "datePosted": "<?php echo get_the_date('Y-m-d'); ?>",
  "description": "<?php echo strip_tags(get_the_content());?>",
  "employmentType": "<?php  echo $emp_type; ?>",
  "experienceRequirements": "<?php if($meta['experience'][0]){echo $meta['experience'][0];}else{echo 0 ;} ?> YEARS",
  "educationRequirements": "Not mentioned", 
  "qualifications": "Not mentioned",     
  "industry": "<?php echo $category ? $category: "Not mentioned" ; ?>",
  "validThrough": "<?php if($meta['date_end'][0] ){echo date("Y-m-d",$meta['date_end'][0]); }else{echo date("Y-m-d",time());} ?>",

  "hiringOrganization" :
  {     
   "@type": "Organization",
   "name": "Tasc Outsourcing"
  },

 "jobLocation" :[
    {
      "@type": "Place",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "<?php  echo $city ? $city :"Not mentioned"; ?>",
        "addressRegion": "<?php echo $state ? $state :"Not mentioned"; ?>",
        "addressCountry": "United Arab Emirates",
        "postalCode":"<?php if($meta['zip'][0]){echo $meta['zip'][0] ;}else{echo "Not mentioned";} ?>",
        "streetAddress":"<?php if($meta['streetAddress'][0]){echo $meta['streetAddress'][0]; }else{echo "Not mentioned";} ?>"
    }
  }],
 "baseSalary" :
    {
        "@type": "MonetaryAmount",
       "currency" : "AED",
       "value":
        {     
            "@type": "QuantitativeValue",
            "value": "<?php if( $meta['salary'][0]){ echo $meta['salary'][0];}else{echo "Not mentioned";} ?>",
            "unitText": "<?php if( $meta['salary_unit'][0]){ echo $meta['salary_unit'][0];}else{echo "Not mentioned";} ?>"
        }
    }
}
</script>