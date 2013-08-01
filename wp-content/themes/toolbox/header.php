<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged, $nom_pagina;

	$nom_pagina=get_the_title();
	$nom_pagina=strtolower($nom_pagina);
	$nom_pagina=reemplazar_tildes($nom_pagina);
	
	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'toolbox' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/dark-hive/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/documentReady.js" type="text/javascript"></script>
</head>

<body <?php body_class($nom_pagina); ?>>
<div id="page" class="hfeed">
<?php do_action( 'before' ); ?>
	<header id="branding" role="banner">
		<hgroup>
			<h1 id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			<div id="top_menu">
				<div class="addthis_toolbox addthis_default_style">
					<a href="https://www.facebook.com/kart.champ" class="button_facebook" title="Facebook" target="_blank"></a>
					<a href="https://twitter.com/@kartchamps" class="button_twitter" title="Twitter" target="_blank"></a>
					<!--<a href="mailto:" class="button_email" title="Email" target="_blank"></a>-->
					<a href="#" onClick="window.print();return false" class="button_print" title="Imprimir" target="_blank"></a>
				</div>
				<?php /*echo wp_socializer(addthis, array(
						'type' => toolbar,
						'tbstyle' => 16,
						'tbservices' => 'facebook,twitter,email,print,compact'
					));*/
				?>
				<?php wp_nav_menu( array('menu' => 'top menu' )); ?>
			</div>
		</hgroup>

		<nav id="access" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Main menu', 'toolbox' ); ?></h1>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolbox' ); ?>"><?php _e( 'Skip to content', 'toolbox' ); ?></a></div>

			<?php wp_nav_menu( array('menu' => 'menu' )); ?>
			
  		<form role="search" method="get" id="searchform" action="http://localhost/kartchamp_website/">
      	<div><label class="screen-reader-text" for="s">Buscar por:</label>
      	<input type="text" value="" name="s" id="s">
      	<input type="submit" id="searchsubmit" value="Buscar">
      	</div>
    	</form>
			
		</nav><!-- #access -->
	</header><!-- #branding -->

	<div id="main">