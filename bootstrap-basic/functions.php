<?php
/**
 * Bootstrap Basic theme
 * 
 * @package bootstrap-basic
 */


/**
 * Required WordPress variable.
 */
if (!isset($content_width)) {
    $content_width = 1170;
}


function translater_custom($arr){ //arr это массив сначало русский , потом англ вариант
    $my_lang = pll_current_language();
    if($my_lang=="ru"){
        return $arr[0];
    }elseif($my_lang=="en"){
        return $arr[1];
    }
    return null;
}



if ( ! function_exists( 'our_projects_cp' ) ) {
    function our_projects_cp() {
        $labels = array(
            'name'                => _x( 'Результаты нашей работы', 'Post Type General Name', 'projects' ),
            'singular_name'       => _x( 'Результат нашей работы', 'Post Type Singular Name', 'projects' ),
            'menu_name'           => __( 'Результаты нашей работы', 'projects' ),
            'parent_item_colon'   => __( 'Родительский:', 'projects' ),
            'all_items'           => __( 'Все записи', 'projects' ),
            'view_item'           => __( 'Просмотреть', 'projects' ),
            'add_new_item'        => __( 'Добавить новую запись в Результаты нашей работы', 'projects' ),
            'add_new'             => __( 'Добавить ', 'projects' ),
            'edit_item'           => __( 'Редактировать запись', 'projects' ),
            'update_item'         => __( 'Обновить запись', 'projects' ),
            'search_items'        => __( 'Найти запись', 'projects' ),
            'not_found'           => __( 'Не найдено', 'projects' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'projects' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail','page-attributes','custom-post-template' ),
            'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-site',
            'show_ui' => true,
        );
        register_post_type( 'projects', $args );
    }
    add_action( 'init', 'our_projects_cp', 0 ); // инициализируем
}


if ( ! function_exists( 'review_cp' ) ) {
    function review_cp() {
        $labels = array(
            'name'                => _x( 'Отзывы', 'Post Type General Name', 'review' ),
            'singular_name'       => _x( 'Отзыв', 'Post Type Singular Name', 'review' ),
            'menu_name'           => __( 'Отзывы', 'review' ),
            'parent_item_colon'   => __( 'Родительский:', 'review' ),
            'all_items'           => __( 'Все записи', 'review' ),
            'view_item'           => __( 'Просмотреть', 'review' ),
            'add_new_item'        => __( 'Добавить новую запись в Отзывы', 'review' ),
            'add_new'             => __( 'Добавить ', 'review' ),
            'edit_item'           => __( 'Редактировать запись', 'review' ),
            'update_item'         => __( 'Обновить запись', 'review' ),
            'search_items'        => __( 'Найти запись', 'review' ),
            'not_found'           => __( 'Не найдено', 'review' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'review' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail','page-attributes','custom-post-template' ),
            'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-comments',
            'show_ui' => true,
        );
        register_post_type( 'review', $args );
    }
    add_action( 'init', 'review_cp', 0 ); // инициализируем
}


if ( ! function_exists( 'news_cp' ) ) {
    function news_cp() {
        $labels = array(
            'name'                => _x( 'Новости', 'Post Type General Name', 'news' ),
            'singular_name'       => _x( 'Новость', 'Post Type Singular Name', 'news' ),
            'menu_name'           => __( 'Новости', 'news' ),
            'parent_item_colon'   => __( 'Родительский:', 'news' ),
            'all_items'           => __( 'Все записи', 'news' ),
            'view_item'           => __( 'Просмотреть', 'news' ),
            'add_new_item'        => __( 'Добавить новую запись в Новости', 'news' ),
            'add_new'             => __( 'Добавить ', 'news' ),
            'edit_item'           => __( 'Редактировать запись', 'news' ),
            'update_item'         => __( 'Обновить запись', 'news' ),
            'search_items'        => __( 'Найти запись', 'news' ),
            'not_found'           => __( 'Не найдено', 'news' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'news' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail','page-attributes','custom-post-template' ),
            'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-megaphone',
            'show_ui' => true,
        );
        register_post_type( 'news', $args );
    }
    add_action( 'init', 'news_cp', 0 ); // инициализируем
}

if ( ! function_exists( 'service_cp' ) ) {
    function service_cp() {
        $labels = array(
            'name'                => _x( 'Услуги', 'Post Type General Name', 'service' ),
            'singular_name'       => _x( 'Услуга', 'Post Type Singular Name', 'service' ),
            'menu_name'           => __( 'Услуги', 'service' ),
            'parent_item_colon'   => __( 'Родительский:', 'service' ),
            'all_items'           => __( 'Все записи', 'service' ),
            'view_item'           => __( 'Просмотреть', 'service' ),
            'add_new_item'        => __( 'Добавить новую запись в Услуги', 'service' ),
            'add_new'             => __( 'Добавить ', 'service' ),
            'edit_item'           => __( 'Редактировать запись', 'service' ),
            'update_item'         => __( 'Обновить запись', 'service' ),
            'search_items'        => __( 'Найти запись', 'service' ),
            'not_found'           => __( 'Не найдено', 'service' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'service' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'author', 'thumbnail','page-attributes','custom-post-template' ),
            'taxonomies'          => array( 'post' ), // категории, которые мы создадим ниже
            'public'              => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-megaphone',
            'show_ui' => true,
        );
        register_post_type( 'service', $args );
    }
    add_action( 'init', 'service_cp', 0 ); // инициализируем
}

if (!function_exists('bootstrapBasicSetup')) {
    /**
     * Setup theme and register support wp features.
     */
    function bootstrapBasicSetup() 
    {
        /**
         * Make theme available for translation
         * Translations can be filed in the /languages/ directory
         * 
         * copy from underscores theme
         */
        load_theme_textdomain('bootstrap-basic', get_template_directory() . '/languages');

        // add theme support title-tag
        add_theme_support('title-tag');

        // add theme support post and comment automatic feed links
        add_theme_support('automatic-feed-links');

        // enable support for post thumbnail or feature image on posts and pages
        add_theme_support('post-thumbnails');

        // allow the use of html5 markup
        // @link https://codex.wordpress.org/Theme_Markup
        add_theme_support('html5', array('caption', 'comment-form', 'comment-list', 'gallery', 'search-form'));

        // add support menu
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'bootstrap-basic'),
        ));

        // add support menu
        register_nav_menus(array(
            'second' => __('Second Menu', 'bootstrap-basic'),
        ));

        // add post formats support
        add_theme_support('post-formats', array('aside', 'image', 'video', 'quote', 'link'));

        // add support custom background
        add_theme_support(
            'custom-background', 
            apply_filters(
                'bootstrap_basic_custom_background_args', 
                array(
                    'default-color' => 'ffffff', 
                    'default-image' => ''
                )
            )
        );
    }// bootstrapBasicSetup
}
add_action('after_setup_theme', 'bootstrapBasicSetup');


if (!function_exists('bootstrapBasicWidgetsInit')) {
    /**
     * Register widget areas
     */
    function bootstrapBasicWidgetsInit() 
    {
        register_sidebar(array(
            'name' => __('Sidebar right', 'bootstrap-basic'),
            'id' => 'sidebar-right',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Sidebar left', 'bootstrap-basic'),
            'id' => 'sidebar-left',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Header right', 'bootstrap-basic'),
            'id' => 'header-right',
            'description' => __('Header widget area on the right side next to site title.', 'bootstrap-basic'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Navigation bar right', 'bootstrap-basic'),
            'id' => 'navbar-right',
            'before_widget' => '',
            'after_widget' => '',
            'before_title' => '',
            'after_title' => '',
        ));

        register_sidebar(array(
            'name' => __('Footer left', 'bootstrap-basic'),
            'id' => 'footer-left',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));

        register_sidebar(array(
            'name' => __('Footer right', 'bootstrap-basic'),
            'id' => 'footer-right',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        ));
    }// bootstrapBasicWidgetsInit
}
add_action('widgets_init', 'bootstrapBasicWidgetsInit');


if (!function_exists('bootstrapBasicEnqueueScripts')) {
    /**
     * Enqueue scripts & styles
     */
    function bootstrapBasicEnqueueScripts() 
    {
        global $wp_scripts;

        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7');
        wp_enqueue_style('bootstrap-theme-style', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), '3.3.7');
        wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');
        wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css');
        wp_enqueue_style('fontawesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0');

		wp_enqueue_style('main-scss', get_template_directory_uri() . '/css/style.css');
        wp_enqueue_style('animated-css', get_template_directory_uri() . '/css/animate.min.css');
        wp_enqueue_style('owl-carousel-css', '/node_modules/owl.carousel/dist/assets/owl.carousel.min.css');



        wp_enqueue_script('modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr.min.js', array(), '3.3.1');
        wp_register_script('respond-script', get_template_directory_uri() . '/js/vendor/respond.min.js', array(), '1.4.2');
        $wp_scripts->add_data('respond-script', 'conditional', 'lt IE 9');
        wp_enqueue_script('respond-script');
        wp_register_script('html5-shiv-script', get_template_directory_uri() . '/js/vendor/html5shiv.min.js', array(), '3.7.3');
        $wp_scripts->add_data('html5-shiv-script', 'conditional', 'lte IE 9');
        wp_enqueue_script('html5-shiv-script');
        wp_enqueue_script('yandex-map-script', "https://api-maps.yandex.ru/2.1/?lang=ru_RU");
        wp_enqueue_script('mask-script', get_template_directory_uri() . '/js/jquery.maskedinput.js');
        wp_enqueue_script('increment-script', get_template_directory_uri() . "/js/jquery.spincrement.min.js");
        wp_enqueue_script('jquery');
        wp_enqueue_script('owl-carousel-script', "/node_modules/owl.carousel/dist/owl.carousel.min.js");

        wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(), '3.3.7', true);
        wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array(), false, true);
        wp_enqueue_style('bootstrap-basic-style', get_stylesheet_uri());
    }// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapBasicEnqueueScripts');

add_image_size( 'photo-150-150', 150, 150,array( 'center', 'center' ) );
add_image_size( 'photo-270-205', 270, 205,array( 'center', 'center' ) );
add_image_size( 'photo-300-230', 300, 230,array( 'center', 'center' ) );
add_image_size( 'photo-270-350', 270, 350,true );
/**
 * admin page displaying help.
 */
if (is_admin()) {
    require get_template_directory() . '/inc/BootstrapBasicAdminHelp.php';
    $bbsc_adminhelp = new BootstrapBasicAdminHelp();
    add_action('admin_menu', array($bbsc_adminhelp, 'themeHelpMenu'));
    unset($bbsc_adminhelp);
}


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Custom dropdown menu and navbar in walker class
 */
require get_template_directory() . '/inc/BootstrapBasicMyWalkerNavMenu.php';


/**
 * Template functions
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * --------------------------------------------------------------
 * Theme widget & widget hooks
 * --------------------------------------------------------------
 */
require get_template_directory() . '/inc/widgets/BootstrapBasicSearchWidget.php';
require get_template_directory() . '/inc/template-widgets-hook.php';

