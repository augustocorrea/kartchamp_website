<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Resultados de bú&uacute;squeda para: %s', 'toolbox' ), '<span class="tit_res_busqueda">' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php toolbox_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'search' ); ?>

				<?php endwhile; ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><!--<?php _e( 'No hay resultados de b&uacute;squeda para', 'toolbox' ); ?>-->
						<?php printf( __( 'No hay resultados de b&uacute;squeda para: %s', 'toolbox' ), '<span class="tit_res_busqueda">' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Lo lamentamos, pero no encontramos resultados para la b&uacute;squeda realizada. Por favor, intente nuevamente con palabras clave diferentes.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>