<?php
/**
 * marinate Theme Customizer.
 *
 * @package marinate
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function marinate_customize_register( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
			       
    /** Social Settings */
    $wp_customize->add_section(
        'marinate_social_settings',
        array(
            'title' => esc_html__( 'Social Media Settings', 'marinate' ),
            'priority' => 30,
            'capability' => 'edit_theme_options',
        )
    );
    
    /** Enable/Disable Social Link in Header */
    $wp_customize->add_setting(
        'marinate_social_ed',
        array(
            'default' => '',
            'sanitize_callback' => 'marinate_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'marinate_social_ed',
        array(
            'label' => esc_html__( 'Enable Social Links in Header', 'marinate' ),
            'section' => 'marinate_social_settings',
            'type' => 'checkbox',
        )
    );
    /** Enable/Disable Social Link in Footer */
    $wp_customize->add_setting(
        'marinate_social_ed_footer',
        array(
            'default' => '',
            'sanitize_callback' => 'marinate_sanitize_checkbox',
        )
    );
    
    $wp_customize->add_control(
        'marinate_social_ed_footer',
        array(
            'label' => esc_html__( 'Enable Social Links in Footer', 'marinate' ),
            'section' => 'marinate_social_settings',
            'type' => 'checkbox',
        )
    );	

    /** Facebook Button Url */
    $wp_customize->add_setting(
        'marinate_button_url_fb',
        array( 
            'default' => '',
            'sanitize_callback' => 'marinate_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'marinate_button_url_fb',
        array(
            'label' => esc_html__( 'Facebook Page Url', 'marinate' ),
            'section' => 'marinate_social_settings',
            'type' => 'url',
        )
    );
        /** Twiter Button Url */
    $wp_customize->add_setting(
        'marinate_button_url_tw',
        array( 
            'default' => '',
            'sanitize_callback' => 'marinate_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'marinate_button_url_tw',
        array(
            'label' => esc_html__( 'Twitter Page Url', 'marinate' ),
            'section' => 'marinate_social_settings',
            'type' => 'url',
        )
    );
    /** Pinterest Button Url */
    $wp_customize->add_setting(
        'marinate_button_url_pin',
        array( 
            'default' => '',
            'sanitize_callback' => 'marinate_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'marinate_button_url_pin',
        array(
            'label' => esc_html__( 'Pinterest Page Url', 'marinate' ),
            'section' => 'marinate_social_settings',
            'type' => 'url',
        )
    );
    /** Instagram Button Url */
    $wp_customize->add_setting(
        'marinate_button_url_ins',
        array( 
            'default' => '',
            'sanitize_callback' => 'marinate_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'marinate_button_url_ins',
        array(
            'label' => esc_html__( 'Instagram Page Url', 'marinate' ),
            'section' => 'marinate_social_settings',
            'type' => 'url',
        )
    );

    /**  Google Plus Button Url */
    $wp_customize->add_setting(
        'marinate_button_url_gp',
        array( 
            'default' => '',
            'sanitize_callback' => 'marinate_sanitize_url',
        )
    );
    
    $wp_customize->add_control(
        'marinate_button_url_gp',
        array(
            'label' => esc_html__( 'Google Plus Url', 'marinate' ),
            'section' => 'marinate_social_settings',
            'type' => 'url',
        )
    );
    /** Social Settings Ends */

    /**
     * Sanitization Functions
     * 
     * @link https://github.com/WPTRT/code-examples/blob/master/customizer/sanitization-callbacks.php 
     */
     function marinate_sanitize_checkbox( $checked ){
        // Boolean check.
        return ( ( isset( $checked ) && true == $checked ) ? true : false );
     }
                  
     function marinate_sanitize_url( $url ){
        return esc_url_raw( $url );
     }
         
}
add_action( 'customize_register', 'marinate_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function marinate_customize_preview_js() {
	wp_enqueue_script( 'marinate-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), true );
}
add_action( 'customize_preview_init', 'marinate_customize_preview_js' );

