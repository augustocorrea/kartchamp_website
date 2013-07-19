<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?>

	</div><!-- #main -->
	<br clear="all" />
</div><!-- #page -->

	<footer id="colophon" role="contentinfo">
		<div id="wrapper-footer">
			<?php iinclude_page(33,'displayTitle=false&titleBefore=<h2 style="display: none;">'); ?>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>