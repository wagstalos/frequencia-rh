<?php 
// require get_template_directory() . '/inc/customizer.php';

function load_scripts(){
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'font', 'https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;500;600;700&family=Poppins:wght@300;400;500;700&display=swap' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@7/swiper-bundle.min.css' );

	// wp_enqueue_style( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );

	wp_enqueue_script( 'jquery-two', get_template_directory_uri() . '/js/jquery-3.4.1.min.js');
	wp_enqueue_script( 'jquery-modal', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery-two'), "5.0.2", true);
	// wp_enqueue_script( 'aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
	wp_enqueue_script( 'swipee-js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js');
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',array('jquery-two'), null, true);
    
    //registra o Custom Navigate Walker
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

//titulo 
if(!function_exists('wp_render_title_tag')){
    function pc_render_title() {
        ?> <title><?php wp_title('|', true, 'right' );?> <?php bloginfo('name'); ?> </title> <?php
    }
    add_action('wp_head', 'pc_render_title');
}

//encurtar titulo do post
function max_title_length( $title ) {
	$max = 25;
	if( strlen( $title ) > $max ) {
	return substr( $title, 0, $max ). " &hellip;";
	} else {
	return $title;
	}
	}


//logo
function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 80,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
   }

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function prototipo_config(){
	//menu
	register_nav_menus(
		array(
			'primary' => 'Primary Menu',
			'footet'  => 'Footer Menu',
			'social'  => 'Social Menu'
		)
	);

	add_theme_support( 'post-thumbnails');
}

add_action( 'after_setup_theme', 'prototipo_config',0 );


//widgets
add_action( 'widgets_init', 'prototipo_sidebars' );
function prototipo_sidebars(){
	register_sidebar(
		array(
			'name' => 'Home Page Sidebar',
			'id' => 'sidebar-1',
			'description' => 'Sidebar to used',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widger' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' => 'Banner imagem',
			'id' => 'banner-img',
			'description' => 'Sidebar to used',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Título Principal',
			'id' => 'title-main',
			'description' => 'Coloque uma título principal',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Text Principal',
			'id' => 'text-main',
			'description' => 'Coloque uma frase principal',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<p class="widget-title">',
			'after_title' => '</p>',
		)
	);
	
	register_sidebar(
		array(
			'name' => 'Título Sobre',
			'id' => 'title-about',
			'description' => 'Coloque um título',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name' => 'Título Blog',
			'id' => 'title-blog',
			'description' => 'Coloque um título',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);	
    
}