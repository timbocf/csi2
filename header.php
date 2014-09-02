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

					<div class="col-md-6 col-md-offset-6">

						<input type="text" value="Search Here"><button class="btn">Search</button>

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

		</div>

	<div id="content" class="site-content">
