<?php
function my_scripts_method() {
	wp_enqueue_script(
		'init',
		get_template_directory_uri() . '/css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none',
		array( 'jquery' )
	);
    wp_enqueue_script(
		'html5shiv',
		get_template_directory_uri() . '/css/5grid/html5shiv.js',
		array( 'jquery' )
	);
    wp_enqueue_script(
		'PIE_uncompressed',
		get_template_directory_uri() . '/css/5grid/PIE_uncompressed.js',
		array( 'jquery' )
	);
    wp_enqueue_script(
		'modernizr.custom.93965',
		get_template_directory_uri() . '/css/5grid/modernizr.custom.93965.js',
		array( 'jquery' )
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function theme_styles()
{
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
  wp_register_style( 'core',
    get_template_directory_uri() . '/css/5grid/core.css',
    array(),
    'all' );
    wp_enqueue_style( 'core' );
    wp_register_style( 'nivo',
    get_template_directory_uri() . '/nivo-slider.css',
    array(),
    '20120208',
    'all' );
  wp_enqueue_style( 'nivo' );
}

add_action('wp_enqueue_scripts', 'theme_styles');
add_action( 'wp_enqueue_scripts', 'path_child_google_fonts' );
function path_child_google_fonts() {
    wp_register_style ( 'font-oswald', 'http://fonts.googleapis.com/css?family=Oswald:400,300,700', false, 1.0, 'screen' );
	wp_enqueue_style( 'font-oswald');
}
function denitsaart_customize_register( $wp_customize ){

$wp_customize->add_section('denitsaart_color_scheme', array(
        'title'    => __('Color Scheme', 'denitsaart'),
        'priority' => 120,
    ));

$wp_customize->add_setting( 'link_color' , array(
'default'     => '#000',
'transport'   => 'refresh',
) );

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'denitsaart'),
        'section'  => 'denitsaart_color_scheme',
        'settings' => 'link_color'
    )));
}
add_action( 'customize_register', 'denitsaart_customize_register' );

function denitsaart_customize_css()
{
    ?>
         <style type="text/css">
a { color:<?php echo get_theme_mod('link_color'); ?>; }
         </style>
    <?php
}
add_action( 'wp_head', 'denitsaart_customize_css');
add_action( 'wp_head', 'denitsaart_customize_css');
function denitsaart_header (){
  add_theme_support( 'custom-header', $header );
  add_theme_support( 'custom-background', $backgraund );
  $header = array(
	'image'          => '',
	'random'         => false,
	'width'                  => 0,
	'height'                 => 0,
	'flex-height'            => false,
	'flex-width'             => false,
	'text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
$backgraund = array(
	'color'          => '#000',
	'image'          => get_template_directory_uri() . '/css/images/img02-1.png',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
);
}
add_action( 'after_setup_theme', 'denitsaart_header' );
register_sidebar(array(
  'name' => __( 'widget1' ),
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>' ,
  'after_title' => '</h2>' ,
  'before_widget' => '<section>' ,
  'after_widget' => '</section>'
));

register_sidebar(array(
  'name' => __( 'widget2' ),
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>' ,
  'after_title' => '</h2>' ,
  'before_widget' => '<div class="sbox1">' ,
  'after_widget' => '</div>'
));
register_sidebar(array(
  'name' => __( 'pr-text' ),
  'description' => __( 'Widgets in this area will be shown on the footer.' ),
  'before_title' => '<h2>' ,
  'after_title' => '</h2>' ,
  'before_widget' => '<section>' ,
  'after_widget' => '</section>'
));
register_sidebar(array(
  'name' => __( 'pr-footer' ),
  'description' => __( 'Widgets in this area will be shown on the footer.' ),
  'before_title' => '<h2>' ,
  'after_title' => '</h2>' ,
  'before_widget' => '<section>' ,
  'after_widget' => '</section>'
));
register_sidebar(array(
  'name' => __( 'pr-footer2' ),
  'description' => __( 'Widgets in this area will be shown on the footer.' ),
  'before_title' => '<h2>' ,
  'after_title' => '</h2>' ,
  'before_widget' => '<section>' ,
  'after_widget' => '</section>'
));
register_sidebar(array(
  'name' => __( 'copywrite' ),
  'description' => __( 'Widgets in this area will be shown on the footer.' ),
  'before_widget' => '<p>' ,
  'after_widget' => '</p>'
));
register_nav_menu('Pr menu', 'mobileUI-site-nav');

?>