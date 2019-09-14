<?php
	// Убираем ненужные пункты меню
	function remove_menus() {
		remove_menu_page( 'index.php' );                  //Консоль
		remove_menu_page( 'edit.php' );                   //Записи
		remove_menu_page( 'upload.php' );                 //Медиафайлы
		remove_menu_page( 'edit.php?post_type=page' );    //Страницы
		remove_menu_page( 'edit-comments.php' );          //Комментарии
		remove_menu_page( 'themes.php' );                 //Внешний вид
		remove_menu_page( 'plugins.php' );                //Плагины
		remove_menu_page( 'users.php' );                  //Пользователи
		remove_menu_page( 'tools.php' );                  //Инструменты
		remove_menu_page( 'options-general.php' );        //Настройки
	}

	// add_action( 'admin_menu', 'remove_menus' );

	// Региструрем меню
	// register_nav_menus(array(
	// 	'top'    => 'Основное меню',   //Название месторасположения меню в шаблоне
	// ));

	// Глобальные настройки
	if ( function_exists( 'acf_add_options_page' ) ) {
		// Глобальные настройки сайта
		acf_add_options_page( array(
			'page_title'  => 'Настройки сайта',
			'menu_title'  => 'Настройки сайта',
			'parent_slug' => $parent['menu_slug'],
		) );
	}


	function clear_phone( $phone ) {
		return str_replace( [ '(', ')', '-', '+', ' ' ], '', $phone );
	}

	// Удаляем подробнее в записях
	// function new_excerpt_more( $more ) {
	//     return '';
	// }
	// add_filter('excerpt_more', 'new_excerpt_more');

	//Оnключаем сжатие картинок
	add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );

	// Выключаем Админ Бар
	//add_filter('show_admin_bar', '__return_false');

	//Выводим переводы строк в polylang
	add_action( 'init', function () {
		pll_register_string( 'УСЛУГИ', 'УСЛУГИ' );
		pll_register_string( 'Узнать больше', 'Узнать больше' );
		pll_register_string( 'О КОМПАНИИ', 'О КОМПАНИИ' );
		pll_register_string( 'НАШИ', 'НАШИ' );
		pll_register_string( 'ФИЛИАЛЫ', 'ФИЛИАЛЫ' );
		pll_register_string( 'ОБСЛУЖИВАНИЕ ВСЕЙ', 'ОБСЛУЖИВАНИЕ ВСЕЙ' );
		pll_register_string( 'ТЕРРИТОРИИ МОЛДОВЫ', 'ТЕРРИТОРИИ МОЛДОВЫ' );
		pll_register_string( 'ПАРТНЕРЫ', 'ПАРТНЕРЫ' );
		pll_register_string( 'КОНТАКТЫ', 'КОНТАКТЫ' );
		pll_register_string( 'Позвоните', 'Позвоните' );
		pll_register_string( 'Напишите нам сообщение', 'Напишите нам сообщение' );
		pll_register_string( 'Наш адрес', 'Наш адрес' );
		pll_register_string( 'Телефон', 'Телефон' );
		pll_register_string( 'Назад', 'Назад' );
		pll_register_string( 'Наши услуги', 'Наши услуги' );
	} );