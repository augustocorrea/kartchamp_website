<?php
/*
Template Name: Home Page
*/

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */

get_header(); ?>
    <br clear="all" />
    <div id="marquee">
      <?php echo do_shortcode("[metaslider id=7]"); ?>
    </div>

		<div id="primary">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>

				<?php toolbox_content_nav( 'nav-above' ); ?>
        
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

        <!-- Custom Home-->
        
        	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
        	<div class="entry-summary">
        		<?php the_excerpt(); ?>
        	</div><!-- .entry-summary -->
        	<?php else : ?>
        	<div class="entry-content">
        		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'toolbox' ) ); ?>
        		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
        	</div><!-- .entry-content -->
        	<?php endif; ?>
        
        	<footer class="entry-meta">
        		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
        			<?php
        				/* translators: used between list items, there is a space after the comma */
        				$categories_list = get_the_category_list( __( ', ', 'toolbox' ) );
        				if ( $categories_list && toolbox_categorized_blog() ) :
        			?>
        			<span class="cat-links">
        				<?php printf( __( 'Posted in %1$s', 'toolbox' ), $categories_list ); ?>
        			</span>
        			<span class="sep"> | </span>
        			<?php endif; // End if categories ?>
        
        			<?php
        				/* translators: used between list items, there is a space after the comma */
        				$tags_list = get_the_tag_list( '', __( ', ', 'toolbox' ) );
        				if ( $tags_list ) :
        			?>
        			<span class="tag-links">
        				<?php printf( __( 'Tagged %1$s', 'toolbox' ), $tags_list ); ?>
        			</span>
        			<span class="sep"> | </span>
        			<?php endif; // End if $tags_list ?>
        		<?php endif; // End if 'post' == get_post_type() ?>
        
        		<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
        		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'toolbox' ), __( '1 Comment', 'toolbox' ), __( '% Comments', 'toolbox' ) ); ?></span>
        		<span class="sep"> | </span>
        		<?php endif; ?>
        
        		<?php edit_post_link( __( 'Edit', 'toolbox' ), '<span class="edit-link">', '</span>' ); ?>
        	</footer><!-- #entry-meta -->
        </article><!-- #post-<?php the_ID(); ?> -->
        
        
        <!-- End Of Custom Home-->


				<?php endwhile; ?>

				<?php toolbox_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'toolbox' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'toolbox' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
