<?php if(!get_field('disabled_require_field') ){ ?>
	<?php if (is_array(get_field('require_text'))) { ?>
	    <div class="request-section">
	        <div class="container">
	            <h4><?php echo get_field('require_text');?> <a href="<?php echo get_field('require_link');?>"> <?php echo get_field('require_link_text');?></a></h4>
	        </div>
	    </div>
    <?php } ?>
<?php } ?>
 