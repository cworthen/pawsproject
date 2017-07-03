<?php

// Add scripts and stylesheets

function theme_scripts() {

    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/styles.css' );
		wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '3.1.1', true );
			wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'), '1.3.3', true );
    wp_enqueue_script(
            'bootstrapjs',
            get_stylesheet_directory_uri() . '/js/bootstrap.min.js',
            array(),
            '4.0.0-alpha.5', // Bootstrap version number
            true // Place before </body>
    );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );


// Add Google Fonts
function paws_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');

        wp_register_style('Lato', 'https://fonts.googleapis.com/css?family=Lato:400,700');
        wp_enqueue_style( 'Lato');



		}

add_action('wp_print_styles', 'paws_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

//font awesome stylesheet
function paws_font_awesome(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts','paws_font_awesome');


// Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu'),
	));

  //Custom header

  $defaults = array(
	'default-image'          => '',
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);

  add_theme_support( 'custom-header', $defaults );

function paws_widgets(){

  //Other Sidebar
register_sidebar( array(
  'name' => 'Other Sidebar',
  'id'=> 'other-sidebar',
  'description' =>'This is the other sidebar',
  'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',
  'after_widget' => '</div>',
  'before_title' =>' <h4 class="widget-title">',
  'after_title' =>' </h4>'

) );



//Default Sidebar /*grey-box*/
register_sidebar( array(
'name' => 'Default Sidebar',
'id'=> 'default-sidebar',
'description' =>'This is the default sidebar',
'before_widget' => '<div id="%1$s" class="sidebar-module-insert %2$s">',
'after_widget' => '</div>',
'before_title' =>' <h3 class="widget-title">',
'after_title' =>' </h3>'

) );

//Footer widgets

register_sidebar(
	array(
	'name' => 'Footer Area 1',
	'id'=> 'footer-1',
	'description' =>'Appears in the footer area',
	'before_widget' => '<div id="%1$s" class="text-widget %2$s">',
	'after_widget' => '</div>',
	'before_title' =>' <p class="widget-title">',
	'after_title' =>' </p>'

));


register_sidebar( array(
	'name' => 'Footer Area 2',
	'id'=> 'footer-2',
	'description' =>'Appears in the footer area',
  'before_widget' => '<li id="%1$s" class="address %2$s">',
  'after_widget'  => '</li>',
	'before_title' =>' <h3 class="widget-title">',
	'after_title' =>' </h3>'

));

register_sidebar( array(
'name' => 'Footer Area 3',
'id'=> 'footer-3',
'description' =>'Appears in the footer area',
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' => '</div>',
'before_title' =>' <h3 class="widget-title">',
'after_title' =>' </h3>'

));

}


add_action('init', 'paws_widgets');


  /*function paws_customizer($wp_customize){

  $wp_customize->add_section('paws-customizer-section', array(
    'title'=>'header'
  ));


  $wp_customize->add_setting('paws-customizer-image');


  $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'paws-customizer-image-control', array(
  'label' => 'header',
  'section' => 'paws-customizer-section',
  'settings' => 'paws-customizer-image',
  'width'       => 2295,
  'height'      => 1714
  )));

  }

  add_action('customize_register', 'paws_customizer');*/

?>
