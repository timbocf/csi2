<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package csi2
 */
?>
		</div><!-- container -->

	</div><!-- #content -->

</div><!-- #page -->	

<div class="footer">

	<div class="container-fluid">

		<div class="row">

			<div class="container">

				<div class="bottom-row">

					<div class="col-md-2 col-md-offset-1 first">
						<a href="<?php echo get_home_url() ?>/contractors/">Find Contractor Support</a>
					</div>
					<div class="col-md-1 col-md-offset-2 second">
						<a href="<?php echo get_home_url() ?>/need-skilled-tradespeople-now//">Find Skilled Craftsmen</a>
					</div>
					<div class="col-md-1 col-md-offset-2 third">
						<a href="<?php echo get_home_url() ?>/skilled-trades-people/skilled-trades-job-openings//">Find a Dream Job</a>
					</div>
					<div class="col-md-3 last">
						<span>Contact Us</span>
						<h3><a href="tel:18886390388">1.888.639.0388</a></h3>
					</div>
				</div><!-- bottom-row -->


				<footer id="colophon" class="site-footer">
					<div class="col-md-2 col-xs-12">
						<a href="/privacy-policy/">Privacy Policy</a>
						<span class="sep"> | </span>
						<a href="/site-map/">Site Map</a>
					</div>

					<div class="col-md-7 col-xs-12">
						<ul>
							<li>Proud Members Of:</li>
							<li>
								<img src="<?php bloginfo('template_directory') ?>/images/footer-icons.png">
							</li>
						</ul>
					</div>

					<div class="col-md-3 col-xs-12 fivepints">
						<a href="http://fivepints.com">Site by 5 Pints Productions</a>
					</div>
				</footer><!-- footer -->

			</div><!-- container -->

		</div><!-- row -->

	</div><!-- container-fluid -->

</div><!-- footer -->

<!-- js -->
<script src="<?php bloginfo('template_directory') ?>/js/classie.js"></script>
<script src="<?php bloginfo('template_directory') ?>/js/nav.js"></script>

<?php wp_footer(); ?>

</body>
</html>
