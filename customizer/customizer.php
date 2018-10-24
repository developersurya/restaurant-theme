<?php
/**
 *  Theme Customizer.
 *
 * @package finedine
 */

// Create your-option.php inside customizer-parts folder .Add your new option-name below.
$finedine_customizer_settings = array(
	'defaults',
	'social-options',
	'footer-options',
	'theme-info',
	'sidebar-layout',
	'theme-options',
	'testimonials-reviews',
	'featured-slider-options',
	'header-options',
);

/**
 * Sanitization,control and helper Functions
*/
require get_template_directory() . '/customizer/inc/sanitization-functions.php';
require get_template_directory() . '/customizer/inc/customizer-controls.php';
require get_template_directory() . '/customizer/inc/helper-functions.php';
require get_template_directory() . '/customizer/inc/default-options.php';
require get_template_directory() . '/customizer/inc/selective-part.php';
require get_template_directory() . '/customizer/inc/base-functions.php';
// Load Upgrade to Pro control.
require get_template_directory() . '/customizer/upgrade-to-pro/control.php';

/**
 * Include required customizer
 */
foreach ( $finedine_customizer_settings as $customizer_setting ) {

	require get_template_directory() . '/customizer/parts/' . $customizer_setting . '.php';

}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function finedine_customize_preview_js() {

	wp_enqueue_script( 'finedine_customizer', get_template_directory_uri() . '/customizer/js/customizer.js', array( 'jquery' ), '1.0', true );

}

add_action( 'customize_preview_init', 'finedine_customize_preview_js' );

/**
 * Enqueue Scripts for customize controls
*/
function finedine_customize_scripts() {

	wp_enqueue_style( 'customizer-admin', get_template_directory_uri() . '/customizer/css/customizer-admin.css', false, 'all' );

	wp_enqueue_style( 'finedine-customize', get_template_directory_uri() . '/customizer/upgrade-to-pro/css/customize-controls.css' );

	wp_enqueue_script( 'finedine-customize-controls', get_template_directory_uri() . '/customizer/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

	wp_enqueue_style( 'finedine-customize-controls', get_template_directory_uri() . '/customizer/upgrade-to-pro/customize-controls.css' );

}

add_action( 'customize_controls_enqueue_scripts', 'finedine_customize_scripts' );




