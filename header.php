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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Montier Kess" />
	<meta name="description" content="<?php bloginfo('description'); /* WPCS: xss ok. */ ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Stylesheets -->
	<link href="<?php bloginfo('template_url'); ?>/css/theme.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet">
	<link href="<?php bloginfo('template_url'); ?>/css/main.css" rel="stylesheet">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="hero-bg hero">
	<?php
		$waxom_logo = get_field('waxom_logo');
	?>
		<header id="masthead" class="site-header inner clearfix" role="banner">
			<div class="left-element"><img src="<?php echo $waxom_logo['url']; ?>" class="logo-img" /></div>
			
			
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
		<?php
			// Variables for ACF fields
			$hero_bg = get_field('hero_bg');
			$hero_title= get_field('hero_title');
			$hero_subtitle = get_field('hero_subtitle');
			$hero_text = get_field('hero_text');
			$hero_btn_text = get_field('hero_btn_text');
		?>
            <div class="subtitle"><?php echo $hero_subtitle ?></div>
            <h1>
            	<?php echo $hero_title ?>
            </h1>
            <p class="paragraph"><?php echo $hero_text ?></p>
            <a class="btn" href="#" >Get Started</a>
        </div>
	</div>

	<div id="content" class="site-content">
