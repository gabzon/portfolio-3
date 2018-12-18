<?php


if ( is_plugin_active( 'kirki/kirki.php' ) ) {

  $args = [
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
  ];

  Kirki::add_config( 'gz_portfolio', $args );

  Kirki::add_panel( 'gz_design', array(
      'priority'    => 60,
      'title'       => esc_attr__( 'Design', 'sage' ),
      'description' => esc_attr__( 'Default design of the website, colors, fonts and styles', 'sage' ),
  ) );

  Kirki::add_section( 'section_id', array(
      'title'          => esc_attr__( 'Header & Footer', 'textdomain' ),
      'description'    => esc_attr__( 'Style, font and colors for the header and footer', 'textdomain' ),
      'panel'          => 'gz_design',
      'priority'       => 160,
  ) );

  Kirki::add_field( 'gz_portfolio', array(
  	'type'        => 'color-palette',
  	'settings'    => 'color_palette_setting_0',
  	'label'       => esc_attr__( 'Color-Palette', 'textdomain' ),
  	'description' => esc_attr__( 'This is a color-palette control', 'textdomain' ),
  	'section'     => 'section_id',
  	'default'     => '#888888',
  	'choices'     => array(
  		'colors' => array( '#000000', '#222222', '#444444', '#666666', '#888888', '#aaaaaa', '#cccccc', '#eeeeee', '#ffffff' ),
  		'style'  => 'round',
  	),
  ) );

}
