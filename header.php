<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package csi2
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'csi2' ); ?></a>

	<div class="container">

		<div class="row">

			<div class="logo col-md-4">

				<img src="<?php bloginfo('template_directory') ?>/images/csi-logo.png" alt="Construction Strategies Inc" title="Construction Strategies Inc">

			</div>

			<div class="address col-md-2">

				<ul>

					<?php 

						$args = array(

							'post_type' => 'addresses',

							'posts_per_page' => -1

						);

						$query = new WP_Query($args);

						while($query->have_posts() ) :

							$query->the_post();

							if(get_the_title() === 'Head Office') :

					?>

					<li><?php the_cfc_field('address', 'street-address') ?></li>
					<li><?php the_cfc_field('address', 'aptsuiteunit') ?></li>
					<li><?php the_cfc_field('address', 'city-state-zip') ?></li>

					<?php endif; endwhile; wp_reset_postdata(); ?>
				</ul>
			</div>

			<!-- <div class="col-md-2"></div> -->

			<div class="col-md-6">

				<img src="<?php bloginfo('template_directory') ?>/images/30-yrs-xp.png" alt="30+ years experience" title="30+ years experience">

				<div class="row">

					<div class="searchform col-md-7 col-md-offset-5">

						<form>

							<input type="search" class="search" placeholder="Search Here" required>

							<input type="button" class="button" value="Search">

						</form>

					</div>

				</div>

			</div>

		</div>

		<div class="row header-phone-social">

			<div class="col-md-3">

				<a href="tel:18886390388">

					<img src="<?php bloginfo('template_directory') ?>/images/header-phone-link.png" alt="1-888-639-0388" title="1-888-639-0388">

				</a>

			</div>

			<div class="social col-md-3 col-md-offset-6">

				<ul>

					<li><a href="#careerbuilder" class="careerbuilder">Careerbuilder</a></li>

					<li><a href="#facebook" class="facebook">Facebook</a></li>

					<li><a href="#twitter" class="twitter">Twitter</a></li>

					<li><a href="#google+" class="google">Google+</a></li>

					<li><a href="#email" class="email">Email</a></li>

					<li><a href="#maps" class="maps">Maps</a></li>

				</ul>

			</div>

		</div>

	</div>

	<div class="navigation">
		<div class="container">
			<div class="col-xs-12">
				<header class="navbar" role="banner">

					<div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<nav class="collapse navbar-collapse col-xs-12" role="navigation">
						
						<?php wp_nav_menu( array('menu' => 'primary' )); // Adjust using Menus in Wordpress Admin ?>

					</nav>

				</header>
			</div><!-- col-xs-12 -->
		</div><!-- container -->
	</div><!-- .navigation -->

	<div id="content" class="site-content">

		<div class="container">