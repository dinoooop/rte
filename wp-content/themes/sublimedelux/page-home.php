<?php
/**
 *
 * Template Name: Home Template
 */
get_header(); ?>
<!-- Home -->
	
	<?php include(get_template_directory() . '/templates/slider.php'); ?>
	

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(<?php sdt_show_theme_image('avds_small.jpg') ?>)"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="<?php sdt_show_theme_image('discount.png') ?>" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Discount</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">Smart Phones</div>
						<div class="avds_link"><a href="categories.html">See More</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url(<?php sdt_show_theme_image('avds_large.jpg') ?>)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Professional Cameras</div>
						<div class="avds_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.</div>
						<div class="avds_link avds_link_large"><a href="categories.html">See More</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="product_grid">
	
						<?php 

						$the_query = get_customposts(8, "product");
						
						if ($the_query->have_posts()) :
		                    while ($the_query->have_posts()) : $the_query->the_post(); $post_id = get_the_ID();
		                        ?>
		                        <div class="product">
		                        	<a href="<?php the_permalink() ?>">
										<div class="product_image" 
										style="background-image: url('<?php echo sdt_get_post_thumbnail($post_id); ?>')"></div>
									</a>
									<div class="product_content">
										<div class="product_title">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
									</div>
								</div>
		                        <?php
		                    endwhile;
		                else:
		                    ?>
		                    <p><?php _e('Sorry, no products avaialable.'); ?></p>
		                <?php endif; ?>

					</div>
				</div>

				</div>
			</div>
		</div>	
	</div>	

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">The ITE Story</div>
						<div class="newsletter_text"><p>International Trading Enterprises was launched in 2003 to tap into the growing automotive industry in the region. Today, ITE is the leading supplier for genuine automotive parts, original equipment parts, after market parts, automotive batteries, automotive lubricants and automotive refrigerants across all Emirates – Abu Dhabi, Dubai, Sharjah, Fujairah, Umm Al Quwain, Ras Al Khaimah and Ajman - in the UAE. </p></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>