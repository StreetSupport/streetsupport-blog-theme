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

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PVPXCXT');</script>
  <!-- End Google Tag Manager -->
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

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PVPXCXT"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="sticky">
        <header class="header header--desktop">
            <div class="container">
                <a class="site-header__branding" href="https://streetsupport.net/">
                    <img src="<?php echo get_site_url ();  ?>/wp-content/themes/ssnblog/images/site_icon.svg" class="branding__logo" alt="street support logo">
                    <span class="branding__text">Street Support</span>
                </a>
                <nav class="header__nav">
                    <ul class="nav__list">
                        <li class="nav__item nav__item--about"><a href="https://streetsupport.net/about/">About</a></li>
                        <li class="nav__item nav__item--news nav__item--active"><a href="/">News</a></li>
                        <li class="nav__item nav__item--contact"><a href="https://streetsupport.net/contact/">Contact Us</a></li>
                        <li class="nav__item nav__item--contact"><a href="https://streetsupport.net/impact/">Impact</a></li>
                        <li class="nav__item nav__item--contact"><a href="https://streetsupport.net/jobs/">Jobs</a></li>
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
                <li class="nav__item nav__item--toolkit"><a href="https://streetsupport.net/manchester/standards-toolkit/">Standards Toolkit</a></li>
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
            <li class="nav__item nav__item--charter"><a href="https://charter.streetsupport.net">Charter</a></li>
            <li class="nav__item nav__item--bigchange"><a href="https://streetsupport.net/manchester/bigchangemcr/">Big Change</a></li>

            <li class="nav__item nav__item--toolkit">
            <a href="https://streetsupport.net/manchester/standards-toolkit/">Standards Toolkit</a>
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
        <a class="site-header__branding" href="https://streetsupport.net/">
        <img src="<?php echo get_site_url ();  ?>/wp-content/themes/ssnblog/images/site_icon.svg" class="branding__logo" alt="street support logo">
        <span class="branding__text">Street Support</span>
        </a>

        <button class="btn btn--plain btn--brand-d site-header__nav-button js-nav-open">
        <span class="btn__text">Menu</span>
        </button>
    </header>

    <div id="content" class="site-content">
