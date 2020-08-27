<?php if(!get_field('disable_content_item') ){ ?>
    <?php if (is_array(get_field('content_item_listing'))) { ?>
        <div class="card-section">
            <div class="container clearfix">
                <?php 
                    $content_lists = get_field('content_item_listing');
                    foreach($content_lists as $key=>$content_list){
                ?>  
                    <div class="blogs">
                        <div class="blog-content register-cv">
                            <h4><?php echo $content_list['content_item_list_title']; ?></h4>
                            <div class="register-cv-content"><?php echo $content_list['content_item_list_description'];?></div>
                            <?php if(!empty($content_list['content_item_register_field'])){ ?>
                                <a href="<?php echo $content_list['content_item_list_button_link']; ?>#/registercv" class="btn blue-btn lower-case"><?php echo $content_list['content_item_list_button_text']; ?></a>
                            <?php } else {?>
                                <a href="<?php echo $content_list['content_item_list_button_link']; ?>" class="btn blue-btn lower-case"><?php echo $content_list['content_item_list_button_text']; ?></a>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
<?php } ?>
