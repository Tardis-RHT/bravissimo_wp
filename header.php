<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php
    if(is_404()){
        echo "<title>Такой страницы нет | " . get_bloginfo("name") . "</title>";
        echo "<meta name=\"robots\" content=\"noindex,nofollow\">";
    }
    ?>
    <title></title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/logo1.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WCTWTW9');</script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCTWTW9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php 
    require 'lang.php';
    LangDicts::$dict = LangDicts::$rus;
    if(get_locale() == 'ru_RU') LangDicts::$dict = LangDicts::$rus;
    elseif(get_locale() == 'uk') LangDicts::$dict = LangDicts::$ukr;
?>
<main>
<!-- header -->
<header class="header">
    <div class="header_wrapper-1">
        <div class="header_hide wrapper">
            <?php qtranxf_generateLanguageSelectCode($type='text'); ?>
            <div class="header_contacts">
                <a class="header_contacts-num1"
                href="tel:'<?php echo str_replace(" ","",get_post_meta(69, 'tel1', true)); ?>'"><?php echo get_post_meta(69, 'tel1', true); ?></a>
                <a class="header_contacts-email"
                href="mailto:'<?php echo get_post_meta(69, 'e-mail', true); ?>'"><?php echo get_post_meta(69, 'e-mail', true); ?></a>
            </div>
        </div>
        <div class="header_menu-wrapper wrapper">
			<nav class="header_menu-desktop">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu-left', 'menu_class' => 'header_menu' ) ); ?>
            <div class="header_logo-allways">
                <a class="header_logo-wrapper" href="<?php echo esc_url(home_url('/')) ?>">
                    <img class="header_logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-1.png" alt="<?php bloginfo('name')?> logo">
                </a>
                <div class="header_menumobile-only">
                    <div class="hamburger-icon" id="button_menu">
                        <button class="hamburger-icon-btn">
                            <span class="span_hamburger"></span>
                        </button>
                    </div>
                </div>
            </div>
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu-right', 'menu_class' => 'header_menu' ) ); ?>
        </nav>
        </div>
    </div>
</header>
<!-- /header -->