<?php if(!get_field('disabled_process_chart') ){ ?>
<?php $steps = get_field('prosess_steps');?>
<?php if (is_array($steps) && count($steps)) { ?>
	<div class="process-section">
        <div class="process-wrapper container">
            <h3 class="icon-before geographies-icon"><?php echo get_field('process_title'); ?></h3>
            <div class="process-step-wrap">
                <?php foreach($steps as $key=>$step) {?>
                    <div class="process-steps">
                        <div class="process-icon">
                            <div class="process-svg">
                            <?php $image = $step['prosess_steps_logo'];
                            //if($image) { ?>
                                <!-- <img src="<?php //echo $step['prosess_steps_logo']; ?>" alt="step-icon"> -->
                            <?php //} ?>
                            <?php if(!empty($step['process_steps_svg_code'])){ ?>
                                
                                    <?php echo $step['process_steps_svg_code']; ?>
                               
                            <?php }elseif($image){ ?>
                                <img src="<?php echo $step['prosess_steps_logo']; ?>" alt="step-icon">
                            <?php }?>
                             </div>
                        </div>
                        <div class="step-img">Step <?php echo $key+1; ?></div>
                        <div class="process-details">
                            <h5 class="step-title"><?php echo $step['prosess_steps_title'];?></h5>    
                            <div class="step-details"><?php echo $step['prosess_steps_description'];?></div> 
                        </div> 
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php } ?>
      