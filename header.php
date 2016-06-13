<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ssnblog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <script>
    (function(d) {
      var config = {
        kitId: 'efe1dsh',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>
  <script>
    WebFontConfig = {
      custom: ['museo_sans_rounded500']
    }

    var loadFonts = function (d) {
      var wf = d.createElement('script')
      var s = d.scripts[0]
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js'
      s.parentNode.insertBefore(wf, s)
    }
    loadFonts(document)
  </script>
  <?php wp_head(); ?>
</head>

<body class="page-home" style="touch-action: manipulation;" <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ssnblog' ); ?></a>

    <div id="container_header">
      <header id="masthead" class="site-header" role="banner">
        <a href="<?php echo get_site_url (); ?>">
          <img src="<?php echo get_site_url ();  ?>/wp-content/themes/ssnblog/images/site_icon.svg" id="logo" alt="street support logo">
          <h1 class="h3 header__title">Street Support Blog</h1>
        </a>
        
        <button class="nav-button btn btn-brand-j">
          <span class="btn__text">Menu</span>
        </button>
        <nav id="site-navigation" class="main-navigation" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav>
      </header>
    </div>

    <div id="content" class="site-content">
