<?php if(!get_field('disabled_survey') ){ ?>
	<div class="survey-wrap">
	    <div class="container">
	    	<?php if(get_field('survey_title')) { ?>
	           <h2><?php echo get_field('survey_title'); ?></h2>
	        <?php } ?>
	        <div><?php echo get_field('survey_description'); ?></div>
	        <div class="but-wrap">
	            <a class="btn blue-btn" href="<?php echo get_field('blue_button_link'); ?>"><?php echo get_field('blue_button_text'); ?></a>
	            <a class="btn green-btn" href="<?php echo get_field('green_button_link'); ?>"><?php echo get_field('green_button_text'); ?></a>
	        </div>
	    </div>
	</div>
<?php } ?>