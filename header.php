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

<body style="touch-action: manipulation;" <?php body_class(); ?>>
    <div class="sticky">
        <header class="header header--desktop">
            <div class="container">
                <a class="site-header__branding" href="<?php echo get_site_url (); ?>">
                    <img src="<?php echo get_site_url ();  ?>/wp-content/themes/ssnblog/images/site_icon.svg" class="branding__logo" alt="street support logo">
                    <span class="branding__text">Street Support</span>
                </a>
                <nav class="header__nav">
                    <ul class="nav__list">
                        <li class="nav__item nav__item--about"><a href="https://streetsupport.net/about/">About</a></li>
                        <li class="nav__item nav__item--news nav__item--active"><a href="/">News</a></li>
                        <li class="nav__item nav__item--contact"><a href="https://streetsupport.net/contact/">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <nav class="city-nav">
            <ul class="nav__list nav__list">
                <li class="nav__item nav__item--findhelp"><a href="https://streetsupport.net/find-help/">Find Help</a></li>
                <li class="nav__item nav__item--givehelp"><a href="https://streetsupport.net/give-help/">Give Help</a></li>
                <li class="nav__item nav__item--charter"><a href="https://charter.streetsupport.net">Charter</a></li>
                <li class="nav__item nav__item--bigchange"><a href="https://streetsupport.net/manchester/bigchangemcr/">Big Change</a></li>
                <li class="nav__item nav__item--news">
                    <ul class="nav__list nav__list--sub-list">
                        <li class="nav__item nav__item--sub-item nav__item--stories"><a href="/category/stories/">Stories</a></li>
                        <li class="nav__item nav__item--sub-item nav__item--articles"><a href="/category/articles/">Articles</a></li>
                        <li class="nav__item nav__item--sub-item nav__item--latestnews"><a href="/category/latest-news/">News</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <nav class="nav__container js-nav-container nav--mobile">
        <button class="btn btn--plain nav__btn js-nav-close" type="button"><span class="hide-screen">Close</span></button>
        <ul class="nav__list">
            <li class="nav__item"><a href="https://streetsupport.net/">Home</a></li>
            <li class="nav__item nav__item--findhelp">
                <a href="https://streetsupport.net/find-help/">Find Help</a>
                <ul class="nav__list nav__list--sub-list">
                    <li class="nav__item nav__item--emergencyhelp"><a href="https://streetsupport.net/manchester/emergency-help/">Emergency Help</a></li>
                    <li class="nav__item nav__item--allorganisations"><a href="https://streetsupport.net/find-help/all-service-providers/?location=manchester">Organisations</a></li>
                </ul>
            </li>
            <li class="nav__item nav__item--givehelp">
                <a href="https://streetsupport.net/give-help/">Give Help</a>
                <ul class="nav__list nav__list--sub-list">
                    <li class="nav__item nav__item--sub-item nav__item--giveitems"><a href="https://streetsupport.net/give-help/help/">Help</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--donate"><a href="https://streetsupport.net/give-help/donate/">Donate</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--volunteer"><a href="https://streetsupport.net/give-help/volunteer/">Volunteer</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--offeritems"><a href="https://streetsupport.net/give-help/offer-items/">Offer Items</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--partnership"><a href="https://streetsupport.net/give-help/partnership/">Partnership</a></li>
                </ul>
            </li>
            <li class="nav__item nav__item--about"><a href="https://streetsupport.net/about/">About</a></li>
            <li class="nav__item nav__item--news">
                <a href="/">News</a>
                <ul class="nav__list nav__list--sub-list">
                    <li class="nav__item nav__item--sub-item nav__item--stories"><a href="/category/stories/">Stories</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--articles"><a href="/category/articles/">Articles</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--latest-news"><a href="/category/latest-news/">Latest News</a></li>
                </ul>
            </li>
            <li class="nav__item nav__item--contact"><a href="https://streetsupport.net/contact/">Contact Us</a></li>
        </ul>
        </nav>


    <div id="page" class="site nav__push js-nav-push">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ssnblog' ); ?></a>

    <header class="site-header" role="banner">
        <a class="site-header__branding" href="<?php echo get_site_url (); ?>">
        <img src="<?php echo get_site_url ();  ?>/wp-content/themes/ssnblog/images/site_icon.svg" class="branding__logo" alt="street support logo">
        <span class="branding__text">Street Support</span>
        </a>
        
        <button class="btn btn--plain btn--brand-d site-header__nav-button js-nav-open">
        <span class="btn__text">Menu</span>
        </button>
    </header>

    <div id="content" class="site-content">
