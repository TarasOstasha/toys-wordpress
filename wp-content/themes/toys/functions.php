<?php
	// action hooks
	 add_action( 'wp_enqueue_scripts', 'toys_style' );
	 add_action( 'wp_footer', 'toys_scripts' );
	 add_action('after_setup_theme', 'add_to_wp_blog');

	 // filter hooks
	 add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3); // добавляем к такому хуку: nav_menu_link_attributes, который встроен в WP - нашу кастомную функцию: filter_nav_menu_link_attributes.   3 - 3 аргумента, которые будет принимать функция, 10 - это стандартный приоритет



	 function toys_style() {
	 	 wp_enqueue_style( 'toys-style', get_stylesheet_uri() ); // connect main style css
	 	 wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/styles/main.min.css' ); // 
	 }

	 function toys_scripts() {
	 	wp_deregister_script('jquery'); // отключаем jquery, который есть внутри wp
  		wp_register_script('jquery','https://code.jquery.com/jquery-3.4.1.js'); // регестрируем jquery
		wp_enqueue_script('jquery'); // ставим его в очередь на подключение
	 	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), null, true);
	 }


	 function add_to_wp_blog() {
		 add_theme_support( 'title-tag' );
		 add_theme_support('post-thumbnails');
	 	register_nav_menus( [
			'header_menu' => 'Меню в шапке',
			'footer_menu' => 'Меню в подвале'
		] );
	 }


	 



	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Header Settings',
			'menu_title'	=> 'Header',
			'parent_slug'	=> 'theme-general-settings',
		));
		
		acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Footer Settings',
			'menu_title'	=> 'Footer',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}

	// add svg logo
	add_filter( 'upload_mimes', 'svg_upload_allow' );

	# Добавляет SVG в список разрешенных для загрузки файлов.
	function svg_upload_allow( $mimes ) {
		$mimes['svg']  = 'image/svg+xml';

		return $mimes;
	}





	function filter_nav_menu_link_attributes($atts, $item, $args) { // аргументы $atts, $item, $args - указаны в документации к хуку nav_menu_link_attributes
		if ($args->menu === 'header_menu') {            // если наше меню имеет название Main (->  мы в ассоциативном массиве находим menu)
			$atts['class'] = 'header__nav-item'; // то берем все атрибуты у ссылок, которые расположены в этом меню - а конкретно берем их классы, и добавляем еще один класс: header__nav-item
	
		// 	if ($item->current) { // если страница, на которой мы находимся является текущей - то берем только у этой активной ссылки класс и добавляем к нему класс активности: header__nav-item-active
		// 		$atts['class'] .= ' header__nav-item-active';
		// 	}
		//    // print_r($item);
		// 	if( $item->ID === 118 && ( in_category( 'soft_toys' ) || in_category( 'edu_toys' ))){
		// 		$atts['class'] .= ' header__nav-item-active';
		// 	}
		};
	
		return $atts; // возращаем атрибуты
	}


	function bluerex_debug($data){ // функция будет принимать на вход некую переменную - это может быть массив, объект и т.д.
		echo '<pre>' . print_r($data, 1) . '</pre>'; // будем распечатывать в форматированном виде
	}

























 ?>