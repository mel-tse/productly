<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package productly
 */
	$image = get_field('logo');
	$picture = $image['sizes']['large'];
?>
	<footer class="container container-footer">
			<div class="logo">
				<div class="logo__text">
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<img src="<?php echo $picture;?>">
					<?php endwhile; endif; ?>
					<span>Productly</span>
				</div>
			</div>
			<div class="footer__primarynav">
				<h5>Quick Links</h5>
				<?php
					wp_nav_menu(
						array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						)
						);
				?>
			</div>
			<div class="footer__secondarynav">
				<h5>Legal Stuff</h5>
				<?php
					wp_nav_menu( 
						array( 
						'theme_location' => 'additional-menu' ) ); 
				?>
			</div>
			<form class="footer__cta">
				<h5>Knowing you're always on the best energy deal.</h5>
				<input class="w3-input" type="text">
				<button class="filled">Sign Up Now</div>
			</form>
	<?php wp_footer(); ?>
</footer>

</body>
</html>
