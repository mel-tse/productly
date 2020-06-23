<?php $marketingTitle = get_field('marketing_strategies_heading');
      $marketingSubtitle = get_field('marketing_strategies_subheading');         
?>
<!-- Marketing strategies -->
<?php if( have_rows('marketing_strategies_slider') ): ?>
    <?php while( have_rows('marketing_strategies_slider') ): the_row(); 
        // Slider 1
        $slider1Image = get_sub_field('slider_image_1');
        $slider1Picture = $slider1Image['sizes']['large'];
        $slider1Title = get_sub_field('slider_title_1');
        $slider1Desc = get_sub_field('slider_description_1');
        // Slider 2
        $slider2Image = get_sub_field('slider_image_2');
        $slider2Picture = $slider2Image['sizes']['large'];
        $slider2Title = get_sub_field('slider_title_2');
        $slider2Desc = get_sub_field('slider_description_2');
        // Slider 3
        $slider3Image = get_sub_field('slider_image_3');
        $slider3Picture = $slider3Image['sizes']['large'];
        $slider3Title = get_sub_field('slider_title_3');
        $slider3Desc = get_sub_field('slider_description_3');
    ?>

<div class="container">
    <div class="marketingstrat__heading">
        <?php if($marketingTitle):?>
            <?php echo $marketingTitle;?>
        <?php endif;?>
    </div>
    <div class="marketingstrat__subheading">
        <?php if($marketingSubtitle):?>
            <?php echo $marketingSubtitle;?>
        <?php endif;?>
    </div>
    <div class="carousel" data-flickity='{ "groupCells": true,  "prevNextButtons": false, "wrapAround": true, "autoPlay": "1500"}'>
        <!-- first slide -->
    <div class="carousel-cell">
        <div class="slider__section1">
                <div class="slider__section1image">
                    <img src="<?php echo $slider1Picture;?>">
                </div>
                <p class="slider__section1desc">
                    <?php if($slider1Desc):?>
                        <?php echo $slider1Desc;?>
                    <?php endif;?>
                    </p>
                <h4 class="slider__section1title">
                    <?php if($slider1Title):?>
                        <?php echo $slider1Title;?>
                    <?php endif;?>
                </h4>
            </div>
    </div>
    <div class="carousel-cell">
        <div class="slider__section2">
            <div class="slider__section2image">
                <img src="<?php echo $slider2Picture;?>">
            </div>
            <p class="slider__section2title">
                <?php if($slider2Title):?>
                    <?php echo $slider2Title;?>
                <?php endif;?>
            </p>
            <h4 class="slider__section2desc">
                <?php if($slider2Desc):?>
                    <?php echo $slider2Desc;?>
                <?php endif;?>
                </h4>
        </div>
    </div>
    <div class="carousel-cell">
        <div class="slider__section3">
            <div class="slider__section3image">
                <img src="<?php echo $slider3Picture;?>">
            </div>
            <p class="slider__section3desc">
                <?php if($slider3Desc):?>
                    <?php echo $slider3Desc;?>
                <?php endif;?>
            </p>
            <h4 class="slider__section3title">
                <?php if($slider3Title):?>
                    <?php echo $slider3Title;?>
                <?php endif;?>
            </h4>
        </div>
    </div>
    <!-- second slide -->
    <div class="carousel-cell">
        <div class="slider__section1">
                <div class="slider__section1image">
                    <img src="<?php echo $slider1Picture;?>">
                </div>
                <p class="slider__section1desc">
                    <?php if($slider1Desc):?>
                        <?php echo $slider1Desc;?>
                    <?php endif;?>
                </p>
                <h4 class="slider__section1title">
                    <?php if($slider1Title):?>
                        <?php echo $slider1Title;?>
                    <?php endif;?>
                </h4>
            </div>
    </div>
    <div class="carousel-cell">
        <div class="slider__section2">
            <div class="slider__section2image">
                <img src="<?php echo $slider2Picture;?>">
            </div>
            <p class="slider__section2title">
                <?php if($slider2Title):?>
                    <?php echo $slider2Title;?>
                <?php endif;?>
            </p>
            <h4 class="slider__section2desc">
                <?php if($slider2Desc):?>
                    <?php echo $slider2Desc;?>
                <?php endif;?>
            </h4>
        </div>
    </div>
    <div class="carousel-cell">
        <div class="slider__section3">
            <div class="slider__section3image">
                <img src="<?php echo $slider3Picture;?>">
            </div>
            <p class="slider__section3desc">
                <?php if($slider3Desc):?>
                    <?php echo $slider3Desc;?>
                <?php endif;?>
            </p>
            <h4 class="slider__section3title">
                <?php if($slider3Title):?>
                    <?php echo $slider3Title;?>
                <?php endif;?>
            </h4>
        </div>
    </div>
    <!-- third slide -->
    <div class="carousel-cell">
        <div class="slider__section1">
                <div class="slider__section1image">
                    <img src="<?php echo $slider1Picture;?>">
                </div>
                <p class="slider__section1desc">
                    <?php if($slider1Desc):?>
                        <?php echo $slider1Desc;?>
                    <?php endif;?>
                </p>
                <h4 class="slider__section1title">
                    <?php if($slider1Title):?>
                        <?php echo $slider1Title;?>
                    <?php endif;?>
                </h4>
            </div>
    </div>
    <div class="carousel-cell">
        <div class="slider__section2">
            <div class="slider__section2image">
                <img src="<?php echo $slider2Picture;?>">
            </div>
            <p class="slider__section2title">
                <?php if($slider2Title):?>
                    <?php echo $slider2Title;?>
                <?php endif;?>
            </p>
            <h4 class="slider__section2desc">
                <?php if($slider2Desc):?>
                    <?php echo $slider2Desc;?>
                <?php endif;?>
            </h4>
        </div>
    </div>
    <div class="carousel-cell">
        <div class="slider__section3">
            <div class="slider__section3image">
                <img src="<?php echo $slider3Picture;?>">
            </div>
            <p class="slider__section3desc">
                <?php if($slider3Desc):?>
                    <?php echo $slider3Desc;?>
                <?php endif;?>
            </p>
            <h4 class="slider__section3title">
                <?php if($slider3Title):?>
                    <?php echo $slider3Title;?>
                <?php endif;?>
            </h4>
        </div>
    </div>
    </div>
</div>

    <?php endwhile; ?>
<?php endif; ?>