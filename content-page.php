<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package csi2
 */
?>

<div class="main-wrap">

	<div class="row">

		<div class="col-md-8 left-column-interior">

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

				<img src="<?php bloginfo('template_directory') ?>/images/content-footer-caption.png" alt="Caption">

			</div><!-- content-footer-caption -->
		</div><!-- left-column-interior -->

		<div class="col-md-4 col-xs-12 sidebar-wrap">

			<div class="sidebar-links">

				<a href="<?php echo get_home_url() ?>/contractors/" class="contractors">

					<h2>Contractor Support</h2>

					<img src="<?php bloginfo('template_directory') ?>/images/sidebar-links-contractor.png" alt="Contractors">

				</a>

				<a href="<?php echo get_home_url() ?>/need-skilled-tradespeople-now/" class="craftsmen">

					<h2>Find Skilled Craftsmen</h2>

					<img src="<?php bloginfo('template_directory') ?>/images/sidebar-links-craftsmen.jpg" alt="Craftsmen">

				</a>

				<a href="<?php echo get_home_url() ?>/skilled-trades-people/skilled-trades-job-openings/" class="find-a-career">

					<h2>Find A Career</h2>

					<img src="<?php bloginfo('template_directory') ?>/images/sidebar-links-find-a-career.jpg" alt="Find a Career">

				</a>

			</div><!-- sidebar-links -->

			<div class="sidebar-image">

				<img src="<?php bloginfo('template_directory') ?>/images/sidebar-image.png" alt="Image">

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

			</div><!-- testimonials -->

		</div><!-- sidebar-wrap -->

	</div><!-- row -->

</div><!-- main-wrap -->

<script>

(function($){$(function(){

	$(window).load(function() {

		var sidebarHeight = $('.sidebar-wrap').height();

		var leftColumnInteriorHeight = $('.left-column-interior').height();

		// document.write('<h2>' + leftColumnInteriorHeight + '</h2>')

		if(sidebarHeight < leftColumnInteriorHeight) {

			$('.content-footer-caption').css('padding-top', '1em', '!important');

		}

	});


})})(jQuery);

</script>