<?php get_header(); ?>
<div class="products">
	<div class="container">
			
		<div class="row">
			<div class="col">
			HEy

			<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile;

			else :

				get_template_part( 'content', 'none' );
	
			endif;
			?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
