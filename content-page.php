<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package csi2
 */
?>

<div class="row">

	<div class="col-md-8">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'csi2' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'csi2' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

	<div class="content-footer-caption">

		<img src="<?php bloginfo('template_directory') ?>/images/content-footer-caption.png">

	</div>

	</div>

	<div class="col-md-4 sidebar-wrap">

		<div class="sidebar-links">

			<a href="<?php echo get_home_url() ?>/about/the-company/" class="contractors">

				<h2>Contractor Support</h2>

				<img src="<?php bloginfo('template_directory') ?>/images/sidebar-links-contractor.png">

			</a>

			<a href="<?php echo get_home_url() ?>/about/the-company/">

				<img src="<?php bloginfo('template_directory') ?>/images/sidebar-links-craftsmen.png">

			</a>

			<a href="<?php echo get_home_url() ?>/about/the-company/">

				<img src="<?php bloginfo('template_directory') ?>/images/sidebar-links-find-a-career.png">

			</a>

		</div>

		<div class="sidebar-image">

			<img src="<?php bloginfo('template_directory') ?>/images/sidebar-image.png">

		</div>

		<div class="testimonials">

			<h3>Client Testimonials</h3>

			<?php   

					$args = array(

						'post_type' => 'testimonials',

						'posts_per_page' => -1

					);

					$query = new WP_Query($args);

					if ( $query->have_posts() ) :

						while ($query->have_posts()) : $query->the_post();

							$meta = get_cfc_meta('testimonial');

							foreach($meta as $key => $value) : ?>

							<div class="testimonial col-xs-10">

								<p><?php the_cfc_field('testimonial', 'testimonial'); ?></p>

								<p><?php the_cfc_field('testimonial', 'name'); ?>, 
										<?php the_cfc_field('testimonial', 'company'); ?></p>

							</div>

			<?php endforeach; endwhile; endif; wp_reset_postdata(); ?>

		</div>

	</div>

</div>