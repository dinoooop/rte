<?php get_header(); ?>

<div class="sdt-page">
		<div class="container">
			
			<div class="row">
				<div class="col">
					
					<div class="product_grid">
	
					<?php 

					$category = get_queried_object();
					
					$the_query = sdt_get_custom_posts([
						'post_type' => 'product',
				        'posts_per_page' => 50,
				        'taxonomy' => 'pdtcat',
    					'terms' => $category->term_id
		    		]);
			
					
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
<?php get_footer(); ?>
