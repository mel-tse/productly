<?php
$image = get_field('logo');
$picture = $image['sizes']['large'];
?>
	
	<div class="container">
		<nav id="site-navigation" class="main-navigation">
				<div class="logo">
					<div class="logo__text">
						<?php if (have_posts()): while (have_posts()): the_post(); ?>
							<img src="<?php echo $picture;?>">
						<?php endwhile; endif; ?>
						<span>Productly</span>
					</div>
					<button class="outline mr-1 nav-expand">Menu</button>
				</div>
				<div class="nav-right">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
					<button class="outline mr-1">Sign In</button>
					<button class="filled">Sign Up</button>
				</div>
		</nav><!-- #site-navigation -->
	</div>