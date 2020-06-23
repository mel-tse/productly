<?php $productImage = get_field('product_managers_image');
      $productPicture = $productImage['sizes']['large'];
?>


<div class="container">
    <div class="splitlayout rowreverse">
        <div class="splitlayout__text">
            <div class="splitlayout__textwrapper copymargin">
                <style>
                    .splitlayout__textwrapper ul li:before{
                        content: url("<?php echo get_stylesheet_directory_uri(); ?>/images/li.png");
                    }
                </style>
                <?php the_field('product_managers_copy'); ?>
            </div>
        </div>
        <div class="splitlayout__image">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <img src="<?php echo $productPicture;?>">
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>