<?php get_header(); ?>

	<div class="home-slideshow-wrap">

		<div class="home-slideshow">

			<div class="slide">

				<img src="<?php bloginfo('template_directory') ?>/images/slide1.png" alt="slider">

			</div>

		</div>

		<div class="container">

			<div class="slider-overlay">

				<div>
					<a href="#todo">
						<img src="<?php bloginfo('template_directory') ?>/images/slider-overlay-1.png" alt="Find Contractor Support" title="Find Contractor Support">
					</a>
				</div>

				<div>
					<a href="#todo">
						<img src="<?php bloginfo('template_directory') ?>/images/slider-overlay-2.png" alt="Find Skilled Craftsmen" title="Find Skilled Craftsmen">
					</a>
				</div>

				<div class="last">
					<a href="#todo">
						<img src="<?php bloginfo('template_directory') ?>/images/slider-overlay-3.png" alt="Find a Dream Job" title="Find a Dream Job">
					</a>
				</div>

			</div>

		</div>

	</div>

	<div class="content-wrap"><!-- class="container" -->

		<div class="row">

			<div class="col-md-4">

				<div class="left-sidebar">

					<h3>Contractor Staffing Services</h3>

					<ul>
						<li>Contractors</li>
						<li>Customer Satisfaction</li>
						<li>Staffing Solutions</li>
						<li>Safety</li>
						<li>Partner With CSI</li>
						<li>Construction Staffing States</li>
						<li>Electrical Staffing</li>
						<li>HVAC Mechanical Staffing</li>
						<li>Plumbing Staffing</li>
						<li>Welding Staffing</li>
						<li>Carpentry Staffing</li>
						<li>Concrete Staffing</li>
						<li>Iron Work Staffing</li>
						<li>Metal Work Staffing</li>
					</ul>

					<h3>Skilled Tradesmen</h3>

					<ul>
						<li>Tradesmen</li>
						<li>CSI Promise to You</li>
						<li>Employee Benefits</li>
						<li>Traveling Tradesmen</li>
						<li>Tradesmen Job Openings</li>
						<li>Electricians Apply Online</li>
						<li>HVAC Mechanical Apply Online</li>
						<li>Carpenters Apply Online</li>
						<li>Concrete Masons Apply Online</li>
						<li>Plumbers Apply Online</li>
						<li>Iron Workers Apply Online</li>
						<li>Metal Workers Apply Online</li>
						<li>Welders Apply Online</li>
						<li>Helpers Apply Online</li>
					</ul>

					<h3>Construction Industries</h3>

					<ul>
						<li>Industrial Staffing</li>
						<li>Renewable Energy Staffing</li>
						<li>Institutional Staffing</li>
						<li>Retail Construction Staffing</li>
					</ul>

					<img src="<?php bloginfo('template_directory') ?>/images/get-the-report.png" alt="Get the Report" title="Get the Report">

				</div>

			</div>

			<div class="col-md-8">

				<div class="home-bio">

					<img src="<?php bloginfo('template_directory') ?>/images/welcome-to-construction-strategies.png" alt="Welcome to Construction Strategies, Inc." title="Welcome to Construction Strategies, Inc." class="headline">

					<div class="content">

						<?php the_cfc_field('welcome_section', 'content-for-welcome-section') ?>

					</div>

					<img src="<?php bloginfo('template_directory') ?>/images/wire.png" alt="wire" class="wire">

				</div>

				<div class="testimonials">

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

									<div>

										<p><?php the_cfc_field('testimonial', 'testimonial'); ?></p>

										<p><?php the_cfc_field('testimonial', 'name'); ?>, 
												<?php the_cfc_field('testimonial', 'company'); ?></p>

									</div>

					<?php endforeach; endwhile; endif; wp_reset_postdata(); ?>

				</div>

				<div class="home-services">

					<img src="<?php bloginfo('template_directory') ?>/images/top-quality-labor-support.png" class="headline" alt="Top Quality Labor Support" title="Top Quality Labor Support">

					<div class="row">

						<ul class="col-md-2">
							<li>Electricians</li>
							<li>Sheet Metal</li>
							<li>Iron Workers</li>
							<li>Painters</li>
							<li>HVAC Techs</li>
							<li>Welders</li>
							<li>Carpenters</li>
						</ul>

						<ul class="col-md-2">
							<li>Riggers</li>
							<li>Plumbers</li>
							<li>Concrete</li>
							<li>Masons</li>
							<li>Metal Workers</li>
							<li>Pipe Fitters</li>
							<li class="and-more">
								<img src="<?php bloginfo('template_directory') ?>/images/and-more.png" alt="We do more!" title="We do more!">
							</li>
						</ul>

						<img src="<?php bloginfo('template_directory') ?>/images/workers.png" alt="Construction Workers" title="Construction Workers" class="col-md-6">

					</div>

				</div>

			</div>

			<div class="clearfix"></div>

		</div><!-- row -->

	</div><!-- container -->


	<div class="bottom-row">

		<div class="col-md-3">
			<a href="#todo">Find Contractor Support</a>
		</div>
		<div class="col-md-3">
			<a href="#todo">Find Skilled Craftsmen</a>
		</div>
		<div class="col-md-3">
			<a href="#todo">Find a Dream Job</a>
		</div>
		<div class="col-md-3 last"></div>

	</div>



<?php get_footer(); ?>