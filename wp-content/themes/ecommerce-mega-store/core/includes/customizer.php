<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecommerce_mega_store_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'ecommerce-mega-store' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'ecommerce-mega-store' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'ecommerce-mega-store' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'ecommerce_mega_store_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'ecommerce-mega-store' ),
	) );

	// Scroll Top

	Kirki::add_section( 'ecommerce_mega_store_section_scroll', array(
	    'title'          => esc_html__( 'Additional Settings', 'ecommerce-mega-store' ),
	    'description'    => esc_html__( 'Scroll To Top', 'ecommerce-mega-store' ),
	    'panel'          => 'ecommerce_mega_store_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'ecommerce_mega_store_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_section_scroll',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'ecommerce_mega_store_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'ecommerce-mega-store' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'ecommerce-mega-store' ),
	    'panel'          => 'ecommerce_mega_store_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_enable_post_heading',
		'section'     => 'ecommerce_mega_store_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecommerce_mega_store_post_excerpt_number',
		'label'       => esc_html__( 'Number of text to show', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	// HEADER SECTION

	Kirki::add_section( 'ecommerce_mega_store_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'ecommerce-mega-store' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'ecommerce-mega-store' ),
	    'panel'          => 'ecommerce_mega_store_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_links_heading',
		'section'     => 'ecommerce_mega_store_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Top Header Text and URL', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text 1', 'ecommerce-mega-store' ),
		'settings' => 'ecommerce_mega_store_free_delivery_text',
		'section'  => 'ecommerce_mega_store_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'URL 1', 'ecommerce-mega-store' ),
		'settings' => 'ecommerce_mega_store_free_delivery_link',
		'section'  => 'ecommerce_mega_store_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'       => esc_html__( 'Text 2', 'ecommerce-mega-store' ),
		'settings' => 'ecommerce_mega_store_return_policy_text',
		'section'  => 'ecommerce_mega_store_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'       => esc_html__( 'URL 2', 'ecommerce-mega-store' ),
		'settings' => 'ecommerce_mega_store_return_policy_link',
		'section'  => 'ecommerce_mega_store_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_phone_number_heading',
		'section'     => 'ecommerce_mega_store_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Phone Number', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecommerce_mega_store_phone_number',
		'section'  => 'ecommerce_mega_store_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_myaccount_link_heading',
		'section'     => 'ecommerce_mega_store_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'My Account URL', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'settings' => 'ecommerce_mega_store_myaccount_link',
		'section'  => 'ecommerce_mega_store_section_header',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_enable_google_translation',
		'section'     => 'ecommerce_mega_store_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Google Translation Box', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_header_google_translation',
		'section'     => 'ecommerce_mega_store_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_enable_search',
		'section'     => 'ecommerce_mega_store_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,		
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_search_box_enable',
		'section'     => 'ecommerce_mega_store_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_enable_socail_link',
		'section'     => 'ecommerce_mega_store_section_header',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'ecommerce_mega_store_section_header',
		'priority'    => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'ecommerce-mega-store' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'ecommerce-mega-store' ),
		'settings'     => 'ecommerce_mega_store_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'ecommerce-mega-store' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'ecommerce-mega-store' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'ecommerce-mega-store' ),
				'description' => esc_html__( 'Add the social icon url here.', 'ecommerce-mega-store' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'ecommerce_mega_store_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'ecommerce-mega-store' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'ecommerce-mega-store' ),
        'panel'          => 'ecommerce_mega_store_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_enable_heading',
		'section'     => 'ecommerce_mega_store_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_text_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_blog_slide_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_slider_heading',
		'section'     => 'ecommerce_mega_store_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'ecommerce_mega_store_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_blog_slide_section',
		'default'     => 3,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'ecommerce_mega_store_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'ecommerce-mega-store' ),
		'priority'    => 10,
		'choices'     => ecommerce_mega_store_get_categories_select(),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'ecommerce_mega_store_slide_excerpt_number',
		'label'       => esc_html__( 'Number of text to show', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_blog_slide_section',
		'default'     => 15,
		'choices'     => [
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		],
	] );

	//OUR COLECTION SECTION

	Kirki::add_section( 'ecommerce_mega_store_our_collection_section', array(
	    'title'          => esc_html__( 'Our Collection Settings', 'ecommerce-mega-store' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'ecommerce-mega-store' ),
	    'panel'          => 'ecommerce_mega_store_panel_id',
	    'priority'       => 160,
	) );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_enable_heading',
		'section'     => 'ecommerce_mega_store_our_collection_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Our Collection',  'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_our_collection_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_our_collection_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable',  'ecommerce-mega-store' ),
		],
	] );
    
    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_our_collection_heading_1',
		'section'     => 'ecommerce_mega_store_our_collection_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Our Collection Section ',  'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 3,
	] );
		
	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'ecommerce_mega_store_our_collection_sub_heading' ,
        'label'    => esc_html__( 'Sub Heading',  'ecommerce-mega-store' ),
        'section'  => 'ecommerce_mega_store_our_collection_section',
        
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'ecommerce_mega_store_our_collection_heading' ,
        'label'    => esc_html__( 'Heading',  'ecommerce-mega-store' ),
        'section'  => 'ecommerce_mega_store_our_collection_section',
    ] );

    kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'ecommerce_mega_store_our_collection_tab_number',
		'label'       => esc_html__( 'Number of post to show ',  'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_our_collection_section',
		'default'     => 4,
		'choices'     => [
			'min'  => 0,
			'max'  => 80,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'ecommerce_mega_store_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'ecommerce-mega-store' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'ecommerce-mega-store' ),
        'panel'          => 'ecommerce_mega_store_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_footer_text_heading',
		'section'     => 'ecommerce_mega_store_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'ecommerce_mega_store_footer_text',
		'section'  => 'ecommerce_mega_store_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'ecommerce_mega_store_footer_enable_heading',
		'section'     => 'ecommerce_mega_store_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'ecommerce-mega-store' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'ecommerce_mega_store_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'ecommerce-mega-store' ),
		'section'     => 'ecommerce_mega_store_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'ecommerce-mega-store' ),
			'off' => esc_html__( 'Disable', 'ecommerce-mega-store' ),
		],
	] );
}

add_action( 'customize_register', 'ecommerce_mega_store_customizer_settings' );
function ecommerce_mega_store_customizer_settings( $wp_customize ) {
	$wp_customize->add_setting('ecommerce_mega_store_our_collection_tab_number',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('ecommerce_mega_store_our_collection_tab_number',array(
		'type' => 'number',
		'label' => __('Show number of product tab','ecommerce-mega-store'),
		'section' => 'ecommerce_mega_store_our_collection_section',
	));

	$collection_post = get_theme_mod('ecommerce_mega_store_our_collection_tab_number','');
    for ( $j = 1; $j <= $collection_post; $j++ ) {

		$wp_customize->add_setting('ecommerce_mega_store_our_collection_tabs_text'.$j,array(
			'default' => '',
			'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('ecommerce_mega_store_our_collection_tabs_text'.$j,array(
			'type' => 'text',
			'label' => __('Tab Text ','ecommerce-mega-store').$j,
			'section' => 'ecommerce_mega_store_our_collection_section',
		));

		$args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($args);
		$cat_posts = array();
		$m = 0;
		$cat_posts[]='Select';
		foreach($categories as $category){
			if($m==0){
				$default = $category->slug;
				$m++;
			}
			$cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('ecommerce_mega_store_our_collection_category'.$j,array(
			'default'	=> 'select',
			'sanitize_callback' => 'ecommerce_mega_store_sanitize_select',
		));

		$wp_customize->add_control('ecommerce_mega_store_our_collection_category'.$j,array(
			'type'    => 'select',
			'choices' => $cat_posts,
			'label' => __('Select category to display products ','ecommerce-mega-store').$j,
			'section' => 'ecommerce_mega_store_our_collection_section',
		));
	}
}