<?php $superheroTitle = get_field('superhero_heading');
      $superheroSubtitle = get_field('super_hero_subheading');
      //super hero image 1
      $superheroImage1 = get_field('super_hero_image_1');
      $superheroPicture1 = $superheroImage1['sizes']['large'];
      //super hero image 2
      $superheroImage2 = get_field('super_hero_image_2');
      $superheroPicture2 = $superheroImage2['sizes']['large'];
      //super hero 3
      $superheroImage3 = get_field('super_hero_image_3');
      $superheroPicture3 = $superheroImage3['sizes']['large'];
      //super hero 4
      $superheroImage4 = get_field('super_hero_image_4');
      $superheroPicture4 = $superheroImage4['sizes']['large'];
      //super hero 5
      $superheroImage5 = get_field('super_hero_image_5');
      $superheroPicture5 = $superheroImage5['sizes']['large'];
?>

<?php if (have_posts()): 
    while (have_posts()): the_post(); ?>
    <div style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/superherobg.png');" class="superhero__bg">
        <div class="container">
            <div class="superhero">
                <div class="superhero__textwrapper">
                    <h3 class="superhero__heading">
                        <?php if($superheroTitle):?>
                            <?php echo $superheroTitle;?>
                        <?php endif;?>
                    </h3>
                    <div class="superhero__subheading">
                        <?php if($superheroSubtitle):?>
                            <?php echo $superheroSubtitle;?>
                        <?php endif;?>
                    </div>
                    <button class="filled">
                        Contact our experts
                    </button>
                    <div class="superhero__imaagewrapper">
                        <img class="superhero__image1" src="<?php echo $superheroPicture1;?>">
                        <img class="superhero__image2" src="<?php echo $superheroPicture2;?>">
                        <img class="superhero__image3" src="<?php echo $superheroPicture3;?>">
                        <img class="superhero__image4" src="<?php echo $superheroPicture4;?>">
                        <img class="superhero__image5" src="<?php echo $superheroPicture5;?>">
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; 
endif; ?>