<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mega
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,  shrink-to-fit=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&amp;family=Oranienbaum&amp;display=swap" rel="stylesheet">


    <?php wp_head(); ?>
</head>
<?php  // $tel = get_field('телефон', 'option');
					// 	$tel_str = str_replace(" ","", $tel);

global $get_template_directory_uri,
       $post,
       $phone_global1,
       $phone_link_global1;
    ?>
<!-- <body  > -->

<body <?php body_class(); ?>>

<div class="main-wrapper">
    <div class="menu-mobile menu-mobile--js d-lg-none">
        <div class="menu-mobile__inner">
            <div class="container">
                <div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
                </div>
	            <?php wp_nav_menu( [
		            'theme_location'  => 'menu-main'
	            ] ); ?>
            </div>
        </div>
    </div>
    <!--  мобильное меню-->
    <!-- start header-->
    <header class="header" id="header">
        <!-- start top-nav-->
        <div class="top-nav block-with-lazy">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <a class="top-nav__logo" href="/"><img src="<?php echo $get_template_directory_uri?>/public/img/@2x/header-logo.png" alt=""/>
                        </a>
                    </div>
                    <div class="col d-none d-lg-block">
	                    <?php wp_nav_menu( [
		                    'theme_location'  => 'menu-main'
	                    ] ); ?>
                    </div>
                    <div class="col col-lg-auto text-end text-lg-start">
                        <a class="top-nav__tel" href="tel:<?= $phone_link_global1?>">
                            <svg class="icon icon-phone ">
                                <use xlink:href="<?php echo $get_template_directory_uri?>/public/img/svg/sprite.svg#phone"></use>
                            </svg><span><?= $phone_global1?></span>
                        </a>
                    </div>
                    <div class="col-auto d-lg-none">
                        <div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top-nav-->
    </header>
    <!-- end header-->
	<?php if( !is_front_page() ) { ?>
	<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
	<?php } ?>
