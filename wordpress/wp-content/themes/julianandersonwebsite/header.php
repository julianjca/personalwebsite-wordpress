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
<meta name="resource-type" content="document" />
<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
<meta http-equiv="content-language" content="en-us" />
<meta name="author" content="Julian Anderson" />
<meta name="contact" content="hi@juliananderson.xyz" />
<meta name="description" content="I am a Front End Developer based in Bandung, Indonesia. Developing kickass website for your small business. Let's talk!" />
<meta name="keywords" content="website, front end, web developer, website developer, 
 Bandung, Julian Anderson, Julian, Indonesia, SEO, HTML, CSS, Javascript" />
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/vendors/css/fontawesome-all.min.css">
    <meta charset="utf-8" />
    <script>
        function openSlideMenu(){
          document.getElementById('side-menu').style.width = '350px';
          document.getElementById('main').style.marginLeft = '350px';
        }
    
        function closeSlideMenu(){
          document.getElementById('side-menu').style.width = '0';
          document.getElementById('main').style.marginLeft = '0';
        }
      </script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli:100,200,300,400,500,600,700,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'julianandersonwebsite'); ?></a>

	<header class="section-1" role="banner">
    <div class="open-slide">
            <a href="#" onclick="openSlideMenu()">
                <svg width="30" height="30">
                    <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
                    <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
                    <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
                </svg>
            </a>
            </div>

    <div id="side-menu" class="side-nav">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
        <a href="/home" class="menu-text ">HOME</a>
        <a href="/blog" class="menu-text ">BLOG</a>
        <a href="/about" class="menu-text ">ABOUT</a>
        <a href="/resume" class="menu-text ">RESUME</a>
        <a href="/contact" class="menu-text ">CONTACT ME</a>
    </div>
        <div class="container-nav">
            <div class="logo">
                <a href=" /home ">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/resources/img/logo-julian-anderson.png" alt="Logo Julian Anderson ">
                </a>
            </div>
            <div class="nav-menu ">
                <ul>
                    <li>
                        <a href="/home" class="menu-text ">HOME</a>
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
	
	