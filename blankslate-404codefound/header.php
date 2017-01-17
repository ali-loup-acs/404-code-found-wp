<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="container">

    <div class="banner">

      <div class="schoolLogo">
        <a href="http://www.accesscodeschool.fr/"><img src="<?php echo get_template_directory_uri() . "/assets/img/logo/logo_ACS.png";?>" /></a>
        <a href="https://www.grandeecolenumerique.fr"><img src="<?php echo get_template_directory_uri() . "/assets/img/logo/logo_GEN.png";?>" /></a>
        <a href="http://www.onlineformapro.com/"><img src="<?php echo get_template_directory_uri() . "/assets/img/logo/logo_OFP.png";?>" /></a>
      </div>

      <div class="cfLogo">
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . "/assets/img/logo/logo_405.png";?>" /></a>
      </div>

    </div>
    <nav class="nav navbar text-center">
      <div class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>Auteurs</a>
        <ul class="dropdown-menu">
          <?php wp_list_authors(array( 'orderby'=>'nicename','name' => 'authors' )); ?>
        </ul>
      </div>

      <div class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span>Catégories</a>
        <ul class="dropdown-menu">
          <?php wp_list_categories(array('title_li'=>'')); ?>
        </ul>
      </div>
    </nav>
  </header>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a><?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?></div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</section>
<!-- <nav id="menu" role="navigation">
<div id="search">
<?php get_search_form(); ?>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav> -->
  </header>
<div class="container">
