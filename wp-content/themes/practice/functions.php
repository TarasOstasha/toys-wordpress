<?php 

	 add_action( 'wp_enqueue_scripts', 'custom_style' );
	 add_action( 'wp_footer', 'custom_scripts' );
	 add_action('after_setup_theme', 'add_to_wp_blog');


	 function custom_style() {
	 	 wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700|Poppins:600,700&amp;subset=cyrillic' ); // 
	 	 wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css' ); //
	 	 wp_enqueue_style( 'custom_style', get_stylesheet_uri() ); // connect main style css
	 	 wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/baguetteBox.min.css' ); // 
	 	 wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css' ); //  ASK
 



	 }

 	 function custom_scripts() {
	 	wp_deregister_script('jquery'); // отключаем jquery, который есть внутри wp
  		wp_register_script('jquery','https://code.jquery.com/jquery-3.4.1.js'); // регестрируем jquery
		wp_enqueue_script('jquery'); // ставим его в очередь на подключение
	 	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
	 	wp_enqueue_script('baguetteBox-js', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', array('jquery'), null, true);
	 	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
	 }

	 function add_to_wp_blog() {

	 }
	 




 ?>