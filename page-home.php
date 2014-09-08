<?php get_header(); ?>

	<div class="home-slideshow-wrap">

		<div class="home-slideshow">

			<div>

				<img src="<?php bloginfo('template_directory') ?>/images/slide3.png" alt="slider">

			</div>

			<div>

				<img src="<?php bloginfo('template_directory') ?>/images/slide1.png" alt="slider">

			</div>

			<div>

				<img src="<?php bloginfo('template_directory') ?>/images/slide2.png" alt="slider">

			</div>

		</div>

		<div class="container">

			<div class="slider-overlay">

				<div class="first">
					<a href="<?php bloginfo() ?>/the-company/">
						<img src="<?php bloginfo('template_directory') ?>/images/slider-overlay-1.png" alt="Find Contractor Support" title="Find Contractor Support">
					</a>
				</div>

				<div class="second">
					<a href="<?php bloginfo() ?>/the-company/">
						<img src="<?php bloginfo('template_directory') ?>/images/slider-overlay-2.png" alt="Find Skilled Craftsmen" title="Find Skilled Craftsmen">
					</a>
				</div>

				<div class="third">
					<a href="<?php bloginfo() ?>/the-company/">
						<img src="<?php bloginfo('template_directory') ?>/images/slider-overlay-3.png" alt="Find a Dream Job" title="Find a Dream Job">
					</a>
				</div>

			</div>

		</div>

	</div>

	<div class="content-wrap"><!-- class="container" -->

		<div class="row">

			<div class="col-md-4">

				<div class="left-column">

					<div class="panel-group" id="accordion">

				        <div class="panel">

				            <div class="panel-heading">

								<h3 class="panel-title">

									<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Contractor Staffing Services</a>

								</h3>

							</div>

							<div id="collapseOne" class="panel-collapse collapse in">
                		
                				<div class="panel-body">

									<ul>
										<li><a href="<?php bloginfo() ?><?php bloginfo() ?>/the-company/">Contractors</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Customer Satisfaction</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Staffing Solutions</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Safety</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Partner With CSI</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Construction Staffing States</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Electrical Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">HVAC Mechanical Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Plumbing Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Welding Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Carpentry Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Concrete Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Iron Work Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Metal Work Staffing</a></li>
									</ul>

								</div>

				            </div>

				        </div>

				        <div class="panel">
				            
				            <div class="panel-heading">

								<h3 class="panel-title">

									<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Skilled Tradesmen</a>

								</h3>

							</div>

					        <div id="collapseTwo" class="panel-collapse collapse">

					            <div class="panel-body">

					            	<ul>
										<li><a href="<?php bloginfo() ?>/the-company/">Tradesmen</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">CSI Promise to You</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Employee Benefits</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Traveling Tradesmen</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Tradesmen Job Openings</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Electricians Apply Online</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">HVAC Mechanical Apply Online</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Carpenters Apply Online</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Concrete Masons Apply Online</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Plumbers Apply Online</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Iron Workers Apply Online</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Metal Workers Apply Online</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Welders Apply Online</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Helpers Apply Online</a></li>
									</ul>

								</div>

							</div>

						</div>

						<div class="panel">

							<div class="panel-heading">

								<h3 class="panel-title">

									<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Construction Industries</a>

								</h3>

							</div>

				            <div id="collapseThree" class="panel-collapse collapse">

				                <div class="panel-body">

									<ul>
										<li><a href="<?php bloginfo() ?>/the-company/">Industrial Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Renewable Energy Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Institutional Staffing</a></li>
										<li><a href="<?php bloginfo() ?>/the-company/">Retail Construction Staffing</a></li>
									</ul>

								</div>

				            </div>

				        </div>

				    </div>

				    <a href="http://constructionstrategiesinc.com/wp-content/uploads/2013/08/IPR_0212_CSI.pdf" target="_blank">

				    	<img src="<?php bloginfo('template_directory') ?>/images/get-the-report.png" alt="Get the Report" title="Get the Report" class="get-the-report">

				    </a>

				</div>

			</div>

			<div class="col-md-8 right-column">

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

									<div class="testimonial col-xs-10">

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

			<!-- <div class="clearfix"></div> -->

		</div><!-- row -->

	</div><!-- container -->

<?php get_footer(); ?>