<ul>

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

</ul>