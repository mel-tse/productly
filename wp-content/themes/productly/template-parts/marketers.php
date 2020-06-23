<?php $marketersImage = get_field('marketers_image');
      $marketersPicture = $marketersImage['sizes']['large'];
?>


<div class="container">
    <div class="splitlayout">
        <div class="splitlayout__text">
            <div class="splitlayout__textwrapper">
                <?php the_field('marketers_copy'); ?>
            </div>
        </div>
        <div class="splitlayout__image">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <img src="<?php echo $marketersPicture;?>">
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>