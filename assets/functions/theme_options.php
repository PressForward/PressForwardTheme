<?php
Kirki::add_config( 'pressforward_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );
Kirki::add_section( 'pf_options', array(
    'title'          => __( 'PressForward.org Theme Options' ),
    'description'    => __( '' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
Kirki::add_field( 'pressforward_theme', array(
	'settings' => 'my_setting',
	'label'    => __( 'My custom control', 'translation_domain' ),
	'section'  => 'pf_options',
	'type'     => 'text',
	'priority' => 10,
	'default'  => 'some-default-value',
) );
