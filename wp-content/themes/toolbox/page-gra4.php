<?php get_header(); ?>

	<!-- GRA4 CONTENT START -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php 
			the_content();					
			?>

		<?php endwhile; ?>
	<?php endif; ?>
	<!-- GRA4 CONTENT END -->
    
<?php get_footer(); ?>