<?php

function my_setup()
{
add_theme_support('post-thumbnails'); 
add_theme_support('automatic-feed-links'); 
add_theme_support('title-tag'); 
add_theme_support(
'html5',
array( 
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');

/* CSSの読み込み */
function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

/* htmlのmargin-topを消す記述 */
add_filter( 'show_admin_bar', '__return_false' );

/* メニューの登録 */
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
'drawer' => 'ドロワーメニュー',
)
);
}
add_action('init', 'my_menu_init');