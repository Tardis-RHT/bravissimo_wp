<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
            echo ' :';
        } ?><?php bloginfo('name'); ?></title>
    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo1.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
    require 'lang.php';
    LangDicts::$dict = LangDicts::$rus;
    if(get_locale() == 'ru_RU') LangDicts::$dict = LangDicts::$rus;
    elseif(get_locale() == 'uk') LangDicts::$dict = LangDicts::$ukr;
?>
<main role="main">
<!-- header -->
<header class="header">
    <div class="header_wrapper-1">
        <div class="header_hide wrapper">
            <?php qtranxf_generateLanguageSelectCode($type='text'); ?>
            <div class="header_contacts">
                <a class="header_contacts-num1"
                href="tel:'<?php echo get_post_meta(69, 'tel1', true); ?>'"><?php echo get_post_meta(69, 'tel1', true); ?></a>
                <a class="header_contacts-email"
                href="mailto:'<?php echo get_post_meta(69, 'e-mail', true); ?>'"><?php echo get_post_meta(69, 'e-mail', true); ?></a>
            </div>
        </div>
        <div class="header_menu-wrapper wrapper">
			<nav class="header_menu-desktop">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu-left', 'menu_class' => 'header_menu' ) ); ?>
            <div class="header_logo-allways">
                <a class="header_logo-wrapper" href="<?php echo esc_url(home_url('/')) ?>"><img class="header_logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-1.png"></a>
                <li class="header_menumobile-only">
                    <div class="hamburger-icon" id="button_menu">
                        <button class="hamburger-icon-btn">
                            <span class="span_hamburger"></span>
                        </button>
                    </div>
                </li>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu-right', 'menu_class' => 'header_menu' ) ); ?>
        </nav>
        </div>
    </div>
</header>
<div class="cont">
<!-- /header -->