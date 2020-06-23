<?php $featureTitle = get_field('feature_headline');         
?>
<!-- USP group -->
<?php if( have_rows('usp') ): ?>
    <?php while( have_rows('usp') ): the_row(); 
        // First click USP
        $clickImage = get_sub_field('first_click_image');
        $clickPicture = $clickImage['sizes']['large'];
        $clickTitle = get_sub_field('first_click_title');
        $clickCopy = get_sub_field('first_click_copy');
        // Design USP
        $designImage = get_sub_field('design_surveys_image');
        $designPicture = $designImage['sizes']['large'];
        $designTitle = get_sub_field('design_surveys_title');
        $designCopy = get_sub_field('design_surveys_copy');
        // Preference USP
        $preferenceImage = get_sub_field('preference_tests_image');
        $preferencePicture = $preferenceImage['sizes']['large'];
        $preferenceTitle = get_sub_field('preference_tests_title');
        $preferenceCopy = get_sub_field('preference_tests_copy');
        // Five second USP
        $fiveImage = get_sub_field('five_second_tests_image');
        $fivePicture = $fiveImage['sizes']['large'];
        $fiveTitle = get_sub_field('five_second_tests_text');
        $fiveCopy = get_sub_field('five_second_tests_copy');
?>

<div style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/featurebg.png');" class="feature__bg">
    <div class="container">
        <div class="feature">
            <h2 class="feature__heading">
                <?php if($featureTitle):?>
                    <?php echo $featureTitle;?>
                <?php endif;?>
            </h2>
            <div class="feature__section-container">
                <!-- click USP -->
                <div class="feature__section">
                    <div class="feature__image">
                        <img src="<?php echo $clickPicture;?>">
                    </div>
                    <div class="feature__title">
                        <?php if($clickTitle):?>
                            <?php echo $clickTitle;?>
                        <?php endif;?>
                    </div>
                    <div class="feature__copy">
                        <?php if($clickCopy):?>
                            <?php echo $clickCopy;?>
                        <?php endif;?>
                    </div>
                </div>
                <!-- design USP -->
                <div class="feature__section">
                    <div class="feature__image">
                        <img src="<?php echo $designPicture;?>">
                    </div>
                    <div class="feature__title">
                        <?php if($designTitle):?>
                            <?php echo $designTitle;?>
                        <?php endif;?>
                    </div>
                    <div class="feature__copy">
                        <?php if($designCopy):?>
                            <?php echo $designCopy;?>
                        <?php endif;?>
                    </div>
                </div>
                <!-- Preference USP -->
                <div class="feature__section">
                    <div class="feature__image">
                        <img src="<?php echo $preferencePicture;?>">
                    </div>
                    <div class="feature__title">
                        <?php if($preferenceTitle):?>
                            <?php echo $preferenceTitle;?>
                        <?php endif;?>
                    </div>
                    <div class="feature__copy">
                        <?php if($preferenceCopy):?>
                            <?php echo $preferenceCopy;?>
                        <?php endif;?>
                    </div>
                </div>
                <!-- Five second tests USP -->
                <div class="feature__section">
                    <div class="feature__image">
                        <img src="<?php echo $fivePicture;?>">
                    </div>
                    <div class="feature__title">
                        <?php if($fiveTitle):?>
                            <?php echo $fiveTitle;?>
                        <?php endif;?>
                    </div>
                    <div class="feature__copy">
                        <?php if($fiveCopy):?>
                            <?php echo $fiveCopy;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <button class="filled">Sign Up Now</button>
        </div>
    </div>
</div>

    <?php endwhile; ?>
<?php endif; ?>