<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('news-image', 320, 220, true);
    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/
// Changing the logo on the Login Page
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url("<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png");
		height:65px;
		width:320px;
		background-size: contain;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
// Changing the link on the Login Page
function my_login_logo_url() {
    return home_url();
}
function my_login_logo_url_title() {
    return 'Studio Bravissimo. Курсы итальянского языка в Киеве.';
}

// HTML5 Blank navigation
function html5blank_nav()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu'            => '',
		'menu_class'      => 'header_menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul>%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
    );
}
// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Load HTML5 Blank scripts (header.php)
// function html5blank_header_scripts()
// {
//     if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

//     	// wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
//         // wp_enqueue_script('conditionizr'); // Enqueue it!

//         // wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
//         // wp_enqueue_script('modernizr'); // Enqueue it!

//         // wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
//         // wp_enqueue_script('html5blankscripts'); // Enqueue it!
//     }
// }


// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu-left' => __('Header Menu Left', 'html5blank'), // Main Navigation
        'header-menu-right' => __('Header Menu Right', 'html5blank'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'html5blank'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'html5blank') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
// function html5wp_pagination()
// {
//     global $wp_query;
//     $big = 999999999;
//     echo paginate_links(array(
//         'base' => str_replace($big, '%#%', get_pagenum_link($big)),
//         'format' => '?paged=%#%',
//         'current' => max(1, get_query_var('paged')),
//         'total' => $wp_query->max_num_pages
//     ));
// }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
// add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
// add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts
// add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
// add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation

add_action('init', 'create_post_type_levels');
add_action('init', 'create_post_type_offers');
add_action('init', 'create_post_type_teachers');
add_action('init', 'create_post_type_library');
add_action('init', 'create_post_type_news');
add_action('init', 'create_post_type_clients');


// add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
    wp_enqueue_style( 'admin_css', get_template_directory_uri().'/css/admin-style.css', false, '1.0.0' );
}
// Changing the logo on the Login Page
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
// Changing the link on the Login Page
add_filter( 'login_headerurl', 'my_login_logo_url' );
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_levels()
{
    register_taxonomy_for_object_type('category', 'levels'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'levels');
    register_post_type('html5-levels', // Register Custom Post Type
        array(
        'menu_icon' => 'dashicons-clipboard',
        'labels' => array(
            'name' => __('Программы и расписания', 'levels'), // Rename these to suit
            'singular_name' => __('Программы и расписания', 'levels'),
            'add_new' => __('Добавить', 'levels'),
            'add_new_item' => __('Добавить программу', 'levels'),
            'edit' => __('Редактировать', 'levels'),
            'edit_item' => __('Редактировать программы и расписания', 'levels'),
            'new_item' => __('Добавить программу', 'levels'),
            'view' => __('Просмотреть программу', 'levels'),
            'view_item' => __('Просмотреть программу', 'levels'),
            'search_items' => __('Найти программу', 'levels'),
            'not_found' => __('Программа не найдена', 'levels'),
            'not_found_in_trash' => __('Программа не найдена в корзине', 'levels')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

function create_post_type_offers()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-offers', // Register Custom Post Type
        array(
        'menu_icon' => 'dashicons-lightbulb',
        'labels' => array(
            'name' => __('Мы предлагаем', 'offers'), // Rename these to suit
            'singular_name' => __('Мы предлагаем', 'offers'),
            'add_new' => __('Добавить', 'offers'),
            'add_new_item' => __('Добавить предложение', 'offers'),
            'edit' => __('Редактировать', 'offers'),
            'edit_item' => __('Редактировать предложение', 'offers'),
            'new_item' => __('Добавить предложение', 'offers'),
            'view' => __('Просмотреть предложение', 'offers'),
            'view_item' => __('Просмотреть предложение', 'offers'),
            'search_items' => __('Найти предложение', 'offers'),
            'not_found' => __('Предложение не найдено', 'offers'),
            'not_found_in_trash' => __('Предложение не найдено в корзине', 'offers')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
function create_post_type_teachers()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-teachers', // Register Custom Post Type
        array(
        'menu_icon' => 'dashicons-businessman',
        'labels' => array(
            'name' => __('Наши учителя', 'html5blank'), // Rename these to suit
            'singular_name' => __('Наши учителя', 'html5blank'),
            'add_new' => __('Добавить', 'html5blank'),
            'add_new_item' => __('Добавить учителя', 'html5blank'),
            'edit' => __('Редактировать', 'html5blank'),
            'edit_item' => __('Редактировать учителя', 'html5blank'),
            'new_item' => __('Добавить учителя', 'html5blank'),
            'view' => __('Просмотреть учителя', 'html5blank'),
            'view_item' => __('Просмотреть учителя', 'html5blank'),
            'search_items' => __('Поиск учителя', 'html5blank'),
            'not_found' => __('Учитель не найден', 'html5blank'),
            'not_found_in_trash' => __('Учитель не найден в корзине', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}


function create_post_type_library()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('library', // Register Custom Post Type
        array(
            'menu_icon' => 'dashicons-book',
            'labels' => array(
                'name' => __('Библиотека', 'html5blank'), // Rename these to suit
                'singular_name' => __('Библиотека', 'html5blank'),
                'add_new' => __('Добавить', 'html5blank'),
                'add_new_item' => __('Добавить запись в библиотеку', 'html5blank'),
                'edit' => __('Редактировать', 'html5blank'),
                'edit_item' => __('Редактировать запись в библиотеке', 'html5blank'),
                'new_item' => __('Добавить запись в библиотеку', 'html5blank'),
                'view' => __('Просмотреть запись библиотеки', 'html5blank'),
                'view_item' => __('Просмотреть запись библиотеки', 'html5blank'),
                'search_items' => __('Найти запись библиотеки', 'html5blank'),
                'not_found' => __('Запись не найдена', 'html5blank'),
                'not_found_in_trash' => __('Запись не найдена в корзине', 'html5blank')
            ),
            'public' => true,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'custom-fields'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
                'post_tag',
                'category'
            ) // Add Category and Post Tags support
        ));
}
function create_post_type_news()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('news', // Register Custom Post Type
        array(
        'menu_icon' => 'dashicons-megaphone',
        'labels' => array(
            'name' => __('Новости', 'html5blank'), // Rename these to suit            
            'singular_name' => __('Новости', 'html5blank'),
            'add_new' => __('Добавить', 'html5blank'),
            'add_new_item' => __('Добавить новость', 'html5blank'),
            'edit' => __('Редактировать', 'html5blank'),
            'edit_item' => __('Редактировать новость', 'html5blank'),
            'new_item' => __('Добавить новость', 'html5blank'),
            'view' => __('Просмотреть новость', 'html5blank'),
            'view_item' => __('Просмотреть новость', 'html5blank'),
            'search_items' => __('Искать новость', 'html5blank'),
            'not_found' => __('Новость не найдена', 'html5blank'),
            'not_found_in_trash' => __('Новость не найдена в корзине', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

function create_post_type_clients()
{
    register_taxonomy_for_object_type('category', 'clients'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'clients');
    register_post_type('clients', // Register Custom Post Type
        array(
        'menu_icon' => 'dashicons-groups',
        'labels' => array(
            'name' => __('Клиенты', 'clients'), // Rename these to suit
            'singular_name' => __('Клиенты', 'clients'),
            'add_new' => __('Добавить', 'clients'),
            'add_new_item' => __('Добавить', 'clients'),
            'edit' => __('Редактировать', 'clients'),
            'edit_item' => __('Редактировать Клиентов', 'clients'),
            'new_item' => __('Добавить', 'clients'),
            'view' => __('Просмотреть', 'clients'),
            'view_item' => __('Просмотреть', 'clients'),
            'search_items' => __('Найти', 'clients'),
            'not_found' => __('Страница не найдена', 'clients'),
            'not_found_in_trash' => __('Страница не найдена в корзине', 'clients')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'custom-fields'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
?>