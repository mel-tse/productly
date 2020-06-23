<?php
/*
* Template Name: Landing Page
*/

get_header();
?>


<?php get_template_part( 'template-parts/nav', get_post_type() );
      get_template_part( 'template-parts/header', get_post_type() );
      get_template_part( 'template-parts/feature', get_post_type() );
      get_template_part( 'template-parts/effortless-validation', get_post_type() );
      get_template_part( 'template-parts/product-managers', get_post_type() );
      get_template_part( 'template-parts/marketers', get_post_type() );
      get_template_part( 'template-parts/need-a-superhero', get_post_type() );
      get_template_part( 'template-parts/marketing-strategies', get_post_type() );
?>

<?php
get_footer();
