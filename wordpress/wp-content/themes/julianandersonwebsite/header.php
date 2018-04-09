<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Julian_Anderson_Website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/vendors/css/fontawesome-all.min.css">
    <meta charset="utf-8" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:100,200,300,400,500,600,700,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'julianandersonwebsite'); ?></a>

	<header class="section-1" role="banner">
        <div class="container-nav">
            <div class="logo">
                <a href=" /index ">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/resources/img/logo-julian-anderson.png" alt="Logo Julian Anderson ">
                </a>
            </div>
            <div class="nav-menu ">
                <ul>
                    <li>
                        <a href="http://juliananderson.xyz" class="menu-text ">HOME</a>
                    </li>
                    <li>
                        <a href="/blog" class="menu-text ">BLOG</a>
                    </li>
                    <li>
                        <a href="/about" class="menu-text ">ABOUT</a>
                    </li>
                    <li>
                        <a href="/resume" class="menu-text ">RESUME</a>
                    </li>
                    <li>
                        <a href="/contact" class="menu-text ">CONTACT ME</a>
                    </li>

                </ul>
			</div>
			<?php
		wp_nav_menu(array(

			'theme_location' => 'primary',
			'container' => 'nav',
			'container_class' => 'navbar-collapse collapse',
			'menu_class' => 'nav navbar-nav navbar-right',

		));
		?>
        </div>


	</header>
	
	