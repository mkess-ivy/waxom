<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package waxom
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Montier Kess" />
<meta name="description" content="<?php echo $description; /* WPCS: xss ok. */ ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Stylesheets -->
<link href="<?php bloginfo('template_url'); ?>/css/theme.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet">
<link href="<?php bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="hero-bg hero">
		<header id="masthead" class="site-header inner clearfix" role="banner">
			<div class="left-element"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo-img" /></div>
			
			
			<!-- consider removing main-navigation class, control the menu with this line below -->
			<nav id="site-navigation" class="another-list site-nav-items alignright" role="navigation">
				<!-- this is the mobile menu icon -->
				<div class="mobile-menu hidden"><a href=""><img class="mobile-menu-icon" src="<?php echo get_template_directory_uri(); ?>/img/menu-btn.png" />&nbsp;MENU</a></div>
				<!-- this is the mobile menu btn that comes with wp build -->
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'waxom' ); ?></button>

				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
		<div class="hero-content">
            <div class="subtitle">Unique and Modern Design</div>
            <h1>Portfolio PSD Template</h1>
            <p class="paragraph">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
            <a class="btn" href="#" >Get Started</a>
        </div>
	</div>

	<div id="content" class="site-content">
