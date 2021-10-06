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
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta name="viewport"
		content="width=device-width, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta charset="<?php bloginfo( 'charset' ); ?>">


	<?php wp_head(); ?>
</head>
<?php  // $tel = get_field('телефон', 'option');
					// 	$tel_str = str_replace(" ","", $tel);

global $get_template_directory_uri;
//		 ob_start();
        $email = get_field('email', 'option'); 
		 $logo = get_field('лого', 'option');
		 $logoText = get_field('лого_текст', 'option');
		 $link = get_field('узнать_больше_ссылка', 'option'); 
    ?>
<!-- <body  > -->

<body >

<div class="main-wrapper">
    <div class="menu-mobile menu-mobile--js d-lg-none">
				<div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
				</div>
				<div class="menu-mobile__inner"><a class="menu-mobile__logo" href="/"><img loading="lazy" src="<?php echo $logo ?>" alt=""/></a>
					<?php wp_nav_menu(); ?>
                    <a class="menu-mobile__mail" href="mailto:<?php echo $email ?>"><?php echo $email ?></a><a class="menu-mobile__btn" href="#">LEARN MORE</a>
				</div>
			</div>
			<!--  мобильное меню-->
			<!-- start top-nav-->
			<div class="top-nav block-with-lazy">
				<div class="top-nav__container container">
					<div class="top-nav__row row align-items-center">
						<div class="col col-lg-auto">
							<div class="top-nav__logo"><img loading="lazy" src="<?php echo $logo ?>" alt=""/>
							</div>
						</div>
						<div class="col-auto d-none d-xxl-block">
							<div class="top-nav__map-txt"><?php echo $logoText ?></div>
						</div>
						<div class="col d-none d-lg-block">
							<?php wp_nav_menu(); ?>
						</div>
						<div class="col-auto d-none d-lg-block"><a class="top-nav__mail" href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
						</div>
						<div class="col-auto d-none d-sm-block"><a class="top-nav__btn" href="<?php echo $link ?>">LEARN MORE</a>
						</div>
						<div class="col-auto d-lg-none">
							<div class="toggle-menu-mobile toggle-menu-mobile--js"><span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end top-nav-->