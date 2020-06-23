<?php $headerTitle = get_field('header_headline');
      $headerCopy = get_field('header_copy');
      $headerImage = get_field('header_image');
      $headerPicture = $headerImage['sizes']['large'];
?>

<div class="container">
    <div class="hero">
        <div class="hero__text">
            <h1 class="hero__title">
                <?php if($headerTitle):?>
                    <?php echo $headerTitle;?>
                <?php endif;?>
            </h1>
            <div class="hero__copy">
                <?php if($headerCopy):?>
                    <?php echo $headerCopy;?>
                <?php endif;?>
            </div>
            <div class="hero__cta">
                <button class="filled">Get started</button>
                <div class="hero__video">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/triangle.png">
                    Watch the Video
                </div>
            </div>
        </div>
        <div class="hero__image">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <img src="<?php echo $headerPicture;?>">
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>


