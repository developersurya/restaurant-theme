<?php
/**
 * Default theme options.
 *
 * @package Online_News
 */

if ( ! function_exists( 'finedine_get_option_defaults' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function finedine_get_option_defaults() {

		global $finedine_array_of_default_settings;
		$finedine_array_of_default_settings = array(
			'finedine_header_reservation_text' => 'Button',
			'finedine_header_reservation_url'  => '',
			'finedine_form_shortcode'          => '',
			'finedine_socials_facebook'        => '',
			'finedine_socials_instagram'       => '',
			'finedine_socials_twitter'         => '',
			'finedine_socials_youtube'         => '',
			'finedine_sidebar_layout'          => 'right',
			'feature_slider_count'             => 5,
			'testimonial_slider_count'         => 5,
			'finedine_remove_copyright_text'   => false,
			'hide_reservation_footer_section'  => 0,
			'select_post_feature_slider'       => 1,
			'transition_effects'               => 0,
			'hide_feature_slider_1'            => 0,
			'testimonial_image_hide'           => 1,


			// Add all the default value here.
		);

		return apply_filters( 'finedine_get_option_defaults', $finedine_array_of_default_settings );
	}

endif;
