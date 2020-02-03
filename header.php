<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Sample洋菓子店</title>

    <meta property="og:title" content="Sample洋菓子店">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://ayakakusakari.com/sample-pastry">
	<meta property="og:image" content="https://ayakakusakari.com/sample-pastry/img/ogp.jpg">
	<meta property="og:site_name" content="Sample洋菓子店">
	<meta property="og:description" content="">
    <meta name="twitter:card" content="summary_large_image">
    
    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700">
</head>

<body>

    <header id="header">
        <div class="inner">

            <?php if (is_home() || is_front_page() ) : ?>
            <h1 class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php else : ?>
            <div class="header-logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></div>
            <?php endif; ?>

	        <nav class="header-nav">
                <?php
                wp_nav_menu(
                //.header-listを置き換えて、PC用メニューを動的に表示する
                array(
                'depth' => 1,
                'theme_location' => 'global', //グローバルメニューをここに表示すると指定
                'container' => 'false',
                'menu_class' => 'header-list',
                )
                );
                ?>
            </nav><!-- header-nav -->

            <div class="drawer drawer--left">
                    
                <button type="button" class="drawer-toggle drawer-hamburger">
                    <span class="sr-only">toggle navigation</span>
                    <span class="drawer-hamburger-icon"></span>
                </button><!-- /drawer-hamburger -->

                <?php
                //.drawer-navを置き換えて、スマホ用メニューを動的に表示する
                wp_nav_menu(
                array(
                'depth' => 1,
                'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
                'container' => 'nav',
                'container_class' => 'drawer-nav',
                'menu_class' => 'drawer-menu',
                )
                );
                ?>

            </div><!-- /drawer -->

        </div><!-- /inner -->
    </header><!-- /header -->