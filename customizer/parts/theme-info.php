<?php
/**
 * Theme Info
 *
 * @since   finedine 1.0
 * @package finedine
 */

if ( ! function_exists( 'finedine_add_info_customizer' ) ) {
	/**
	 * Theme Info
	 *
	 * @param $wp_customize
	 */
	function finedine_add_info_customizer ( $wp_customize ) {

		$wp_customize->register_section_type( 'finedine_Customize_Section_Pro' );

		// Register sections.
		$wp_customize->add_section(
			new finedine_Customize_Section_Pro(
				$wp_customize,
				'theme_sell_pro',
				array(
					'title'    => esc_html__( 'Finedine Pro', 'finedine' ),
					'pro_text' => esc_html__( 'Buy PRO', 'finedine' ),
					'pro_url'  => 'https://www.sampression.com/themes/sampression-pro/',
					'priority' => 1,
				)
			)
		);

	}
}

add_action( 'customize_register', 'finedine_add_info_customizer' );

