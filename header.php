<?php
/**
 * @package Apostrophe 2
 *
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
                <link rel="stylesheet" href="/wp-content/themes/apostrophe-2-child/fonts/brandongrotesque_black_macroman/stylesheet.css" type="text/css" charset="utf-8" />
                <link rel="stylesheet" href="/wp-content/themes/apostrophe-2-child/fonts/brandongrotesque_regular_macroman/stylesheet.css" type="text/css" charset="utf-8" />
        	<?php wp_head(); ?>
                <script src="/wp-content/themes/apostrophe-2-child/js/wow.js"></script>
                <script>
                  //new WOW().init();
                </script>
	</head>

  <?php 
    // determine current page for hero image class
    $hero_class = "lpg-empire-panel";
    $current_page = lpg_pagetype();

    if ($current_page=="PRACTICE") {
      $hero_class = "lpg-skyline-panel";
    } else if ($current_page=="FIRM") {
    } else if ($current_page=="NEWS") {
    } else if ($current_page=="CONTACT") {
    }
  ?>

  <body <?php body_class(); ?>>
    <div id="page" class="hfeed site">
      <header id="masthead" class="site-header" role="banner">
        <div class="<?php echo $hero_class ?>">
          <div class="burger">
            <div class="lpg-logo">
              <a href="/"><img class="lpg-logo-img" alt="LPG Logo" src="/wp-content/themes/apostrophe-2-child/images/lpg-logo-trim.png" /></a>
            </div>
	    <nav id="site-navigation" class="main-navigation" role="navigation">
		<a class="menu-toggle"><?php esc_html_e( '', 'apostrophe-2' ); ?></a>
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'apostrophe-2' ); ?></a>
		<?php wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_class'     => 'apostrophe-2-navigation',
		       )); 
                ?>
	 	<?php //apostrophe_2_social_menu(); ?>
	    </nav>
          </div>  
          <?php if ($current_page=="HOME") { ?>
            <div class="lpg-home-cell">
              <div class="lpg-maintitles">
                <div class="lpg-title lpg-home-title">
                   <h1>THE LAW FIRM <span class="lpg-title-of">of</span><br />LAURENCE P. GREENBERG</h1>
                </div>
                <hr class="lpg-bar" />
                <div class="lpg-personally">
                  <h1>WE TAKE YOUR CASE PERSONALLY</h1>
                </div>
                <div class="lpg-adept">
                  <p>The Law Firm of Laurence P. Greenberg is adept in every aspect of matrimonial law &mdash;no matter how complex with victories at both the trial and appellate levels.</p>
                </div>  
              </div>  
            </div>  
          <?php } else if ($current_page=="PRACTICE") { ?>
            <div class="lpg-home-cell">
              <div class="lpg-maintitles">
                <div class="lpg-title lpg-home-title">
                   <h1>OUR PRACTICE</h1>
                </div>
              </div>  
            </div>  
          <?php } else if ($current_page=="FIRM") { ?>
          <?php } else if ($current_page=="NEWS") { ?>
          <?php } else if ($current_page=="CONTACT") { ?>
          <?php }  ?>
        </div>
      </header><!-- #masthead -->

      <div id="content" class="site-content">
