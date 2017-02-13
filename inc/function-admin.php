<?php

/*

@package waxom

This functions page is for setting up the administration page for customizing this theme.

*/

function waxom_add_admin_page() {
	
	// Generate Waxom Admin Page
	add_menu_page( 'Waxom Theme Options', 'Waxom', 'manage_options', 'mk_waxom', 'waxom_theme_create_page', 'dashicons-admin-customizer', 110);

	// General Waxom Admin Sub Pages
	add_submenu_page( 'mk_waxom', 'Waxom Theme Options', 'General', 'manage_options', 'mk_waxom', 'waxom_theme_create_page' );

	add_submenu_page( 'mk_waxom', 'Waxom CSS Options', 'Custom CSS', 'manage_options', 'mk_waxom_css', 'waxom_theme_settings_page' );

	// Activate Custom Settings
	add_action(	'admin_init', 'waxom_custom_settings' );
}
add_action( 'admin_menu', 'waxom_add_admin_page' );

function waxom_custom_settings() {
	register_setting( 'waxom-settngs-group', 'first_name' );
}

function waxom_theme_create_page() {
	// add access to template for this section
	require_once( get_template_directory() . '/inc/templates/waxom-admin.php' );
}

function waxom_theme_settings_page() {
	// generation of our settings page
}

