<?php $effortlessImage = get_field('effortless_validation_image');
      $effortlessPicture = $effortlessImage['sizes']['large'];
?>


<div class="container">
    <div class="splitlayout">
        <div class="splitlayout__text">
            <div class="splitlayout__textwrapper">
                <?php the_field('effortless_validation_copy'); ?>
            </div>
        </div>
        <div class="splitlayout__image">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <img src="<?php echo $effortlessPicture;?>">
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>