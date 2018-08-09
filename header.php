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

    <div id="page" class="site nav__push js-nav-push">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ssnblog' ); ?></a>

    <header class="header" role="banner">
    <div class="container">
      <h1 class="h3 header__title">
        <a href="https://streetsupport.net/">
            <img src="<?php echo get_site_url ();  ?>/wp-content/themes/ssnblog/images/site_icon.svg" class="icon" alt="street support logo">
            <span class="text">Street Support<br />Network</span>
        </a>
      </h1>
      <button class="btn btn--plain header__btn js-nav-open" type="button">Menu</button>
      <button class="btn btn--plain header__btn header__btn--close js-nav-close" type="button"><span>Close menu</span></button>
    </div>
  </header>
  <nav class="nav__container js-nav-container nav">
    <ul class="nav__list">
      <li class="nav__group-container">
        <ul class="nav__group nav__group--header">
            <li class="nav__item nav__item--findhelp">
                <a href="https://streetsupport.net/find-help/" class="nav__item-link nav__item-link--has-sub-nav">Find Help</a>
                <ul class="nav__list nav__list--sub-list nav__list--columned">
                    <li class="nav__item nav__item--mobile-only nav__item--sub-list-title">
                        <button class="sub-list-back-btn">Back</button>
                        <span class="sub-list-text">Find Help</span>
                    </li>
                    <li class="nav__item nav__item__findhelp nav__item--mobile-only">
                        <a href="https://streetsupport.net/find-help/">Find Help</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--emergencyhelp">
                        <a href="https://streetsupport.net/find-help/advice/">Advice</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--allorganisations">
                        <a href="https://streetsupport.net/find-help/all-service-providers/">Organisations</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--find-help-support"><a href="https://streetsupport.net/find-help/support/">Support</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-accom"><a href="https://streetsupport.net/find-help/accommodation/">Accommodation</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-meals"><a href="https://streetsupport.net/find-help/meals/timetable/">Meals</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-dropin"><a href="https://streetsupport.net/find-help/dropin/timetable/">Drop-In</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-items"><a href="https://streetsupport.net/find-help/items/">Personal Items</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-services"><a href="https://streetsupport.net/find-help/services/">Personal Services</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-foodbank"><a href="https://streetsupport.net/find-help/foodbank/timetable/">Food Banks</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-medical"><a href="https://streetsupport.net/find-help/medical/">Medical Services</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-communications"><a href="https://streetsupport.net/find-help/communications/">Communications</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-activities"><a href="https://streetsupport.net/find-help/activities/">Activities</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-training"><a href="https://streetsupport.net/find-help/training/">Training</a></li><li class="nav__item nav__item--sub-item nav__item--find-help-employment"><a href="https://streetsupport.net/find-help/employment/">Employment</a></li>        </ul>
            </li>
            <li class="nav__item nav__item--givehelp">
                <a href="https://streetsupport.net/give-help/" class="nav__item-link nav__item-link--has-sub-nav">Give Help</a>
                <ul class="nav__list nav__list--sub-list">
                    <li class="nav__item nav__item--mobile-only nav__item--sub-list-title">
                        <button class="sub-list-back-btn">Back</button>
                        <span class="sub-list-text">Give Help</span>
                    </li>
                    <li class="nav__item nav__item__givehelp nav__item--mobile-only">
                        <a href="https://streetsupport.net/give-help/">Give Help</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--giveitems">
                        <a href="https://streetsupport.net/give-help/help/">Help</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--donate">
                        <a href="https://streetsupport.net/give-help/donate/">Donate Money</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--volunteer">
                        <a href="https://streetsupport.net/give-help/volunteer/">Volunteer</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--offeritems">
                        <a href="https://streetsupport.net/give-help/offer-items/">Offer Items</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--partnership">
                        <a href="https://streetsupport.net/give-help/partnership/">Partnership</a>
                    </li>
                </ul>
            </li>
            <li class="nav__item nav__item--locations">
                <a href="https://streetsupport.net/locations/" class="nav__item-link nav__item-link--has-sub-nav">Locations</a>
                <ul class="nav__list nav__list--sub-list nav__list--columned">
                    <li class="nav__item nav__item--mobile-only nav__item--sub-list-title">
                        <button class="sub-list-back-btn">Back</button>
                        <span class="sub-list-text">Locations</span>
                    </li>
                    <li class="nav__item nav__item--mobile-only">
                        <a href="https://streetsupport.net/locations/">Locations</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--bolton" data-location="bolton"><a href="https://streetsupport.net/bolton">Bolton</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--bournemouth" data-location="bournemouth"><a href="https://streetsupport.net/bournemouth">Bournemouth</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--bradford" data-location="bradford"><a href="https://streetsupport.net/bradford">Bradford</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--bury" data-location="bury"><a href="https://streetsupport.net/bury">Bury</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--leeds" data-location="leeds"><a href="https://streetsupport.net/leeds">Leeds</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--liverpool" data-location="liverpool"><a href="https://streetsupport.net/liverpool">Liverpool</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--manchester" data-location="manchester"><a href="https://streetsupport.net/manchester">Manchester</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--oldham" data-location="oldham"><a href="https://streetsupport.net/oldham">Oldham</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--portsmouth" data-location="portsmouth"><a href="https://streetsupport.net/portsmouth">Portsmouth</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--rochdale" data-location="rochdale"><a href="https://streetsupport.net/rochdale">Rochdale</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--salford" data-location="salford"><a href="https://streetsupport.net/salford">Salford</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--southampton" data-location="southampton"><a href="https://streetsupport.net/southampton">Southampton</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--stockport" data-location="stockport"><a href="https://streetsupport.net/stockport">Stockport</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--tameside" data-location="tameside"><a href="https://streetsupport.net/tameside">Tameside</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--trafford" data-location="trafford"><a href="https://streetsupport.net/trafford">Trafford</a></li>
                    <li class="nav__item nav__item--sub-item nav__item--wigan-and-leigh" data-location="wigan-and-leigh"><a href="https://streetsupport.net/wigan-and-leigh">Wigan and Leigh</a></li>        </ul>
            </li>
            <li class="nav__item nav__item--news">
                <a href="/" class="nav__item-link nav__item-link--has-sub-nav">News</a>
                <ul class="nav__list nav__list--sub-list">
                    <li class="nav__item nav__item--mobile-only nav__item--sub-list-title">
                        <button class="sub-list-back-btn">Back</button>
                        <span class="sub-list-text">News</span>
                    </li>
                    <li class="nav__item nav__item--mobile-only">
                        <a href="/">News</a>
                    </li>
                    <li class="nav__item nav__item--sub-item">
                        <a href="/category/stories/">Stories</a>
                    </li>
                    <li class="nav__item nav__item--sub-item">
                        <a href="/category/articles/">Articles</a>
                    </li>
                    <li class="nav__item nav__item--sub-item">
                        <a href="/category/latest-news/">Latest News</a>
                    </li>
                </ul>
            </li>
            <li class="nav__item nav__item--about">
                <a href="https://streetsupport.net/about/" class="nav__item-link nav__item-link--has-sub-nav">About</a>
                <ul class="nav__list nav__list--sub-list">
                    <li class="nav__item nav__item--mobile-only nav__item--sub-list-title">
                        <button class="sub-list-back-btn">Back</button>
                        <span class="sub-list-text">About</span>
                    </li>
                    <li class="nav__item nav__item--mobile-only">
                        <a href="https://streetsupport.net/about/">About</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--team">
                        <a href="https://streetsupport.net/about/our-team">Our Team</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--trustees">
                        <a href="https://streetsupport.net/about/our-trustees">Our Trustees</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--jobs">
                        <a href="https://streetsupport.net/about/jobs">Jobs</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--impact">
                        <a href="https://streetsupport.net/about/impact">Impact</a>
                    </li>
                    <li class="nav__item nav__item--sub-item nav__item--contact">
                        <a href="https://streetsupport.net/about/contact">Contact Us</a>
                    </li>
                </ul>
            </li>
        </ul>      </li>
      <li class="nav__group-container">
        <ul class="nav__group nav__group--locations">
          <li class="nav__item nav__item--hub-nav" data-city="bolton">
            <dl class="hub-nav-container">
              <dt data-city="bolton" class="nav__item nav__item--bolton">
                <a href="https://streetsupport.net/bolton/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Bolton</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="bolton" class="nav__item nav__item--bolton-advice">
                    <a href="https://streetsupport.net/bolton/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="bournemouth">
            <dl class="hub-nav-container">
              <dt data-city="bournemouth" class="nav__item nav__item--bournemouth">
                <a href="https://streetsupport.net/bournemouth/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Bournemouth</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="bournemouth" class="nav__item nav__item--bournemouth-advice">
                    <a href="https://streetsupport.net/bournemouth/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="bradford">
            <dl class="hub-nav-container">
              <dt data-city="bradford" class="nav__item nav__item--bradford">
                <a href="https://streetsupport.net/bradford/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Bradford</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="bradford" class="nav__item nav__item--bradford-advice">
                    <a href="https://streetsupport.net/bradford/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li>
          <li class="nav__item nav__item--hub-nav" data-city="bury">
            <dl class="hub-nav-container">
              <dt data-city="bury" class="nav__item nav__item--bury">
                <a href="https://streetsupport.net/bury/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Bury</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="bury" class="nav__item nav__item--bury-advice">
                    <a href="https://streetsupport.net/bury/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="leeds">
            <dl class="hub-nav-container">
              <dt data-city="leeds" class="nav__item nav__item--leeds">
                <a href="https://streetsupport.net/leeds/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Leeds</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="leeds" class="nav__item nav__item--leeds-advice">
                    <a href="https://streetsupport.net/leeds/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="liverpool">
            <dl class="hub-nav-container">
              <dt data-city="liverpool" class="nav__item nav__item--liverpool">
                <a href="https://streetsupport.net/liverpool/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Liverpool</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="liverpool" class="nav__item nav__item--liverpool-advice">
                    <a href="https://streetsupport.net/liverpool/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="manchester">
            <dl class="hub-nav-container">
              <dt data-city="manchester" class="nav__item nav__item--manchester">
                <a href="https://streetsupport.net/manchester/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Manchester</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="manchester" class="nav__item nav__item--manchester-advice">
                    <a href="https://streetsupport.net/manchester/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                  <li data-city="manchester" class="nav__item nav__item--partnership">
                    <a href="https://streetsupport.net/manchester/manchester-homelessness-partnership/" class="nav__item-link nav__item-link--location-item" title="Manchester Homelessness Partnership">MHP</a>
                  </li>
                  <li data-city="manchester" class="nav__item nav__item nav__item--charter">
                    <a href="https://charter.streetsupport.net" class=" nav__item-link nav__item-link--location-item nav__item-link--has-sub-nav">Charter</a>
                    <ul class="nav__list nav__list--sub-list">
                      <li class="nav__item nav__item nav__item--mobile-only nav__item--sub-list-title">
                        <button class="sub-list-back-btn">Back</button>
                        <span class="sub-list-text">Charter</span>
                      </li>
                      <li class="nav__item nav__item nav__item--mobile-only">
                        <a href="https://charter.streetsupport.net/">Charter</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--readthecharter">
                        <a href="https://charter.streetsupport.net/read-the-charter/">Read the Charter</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--pledgeyoursupport">
                        <a href="https://charter.streetsupport.net/pledge-your-support/">Pledge your Support</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--joinactiongroup">
                        <a href="https://charter.streetsupport.net/join-action-group/">Action Groups</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--aboutthecharter">
                        <a href="https://charter.streetsupport.net/about-the-charter/">About the Charter</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--progress">
                        <a href="https://charter.streetsupport.net/progress/">Progress</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--partnershipboard">
                        <a href="https://charter.streetsupport.net/partnership-board/">Partnership Board</a>
                      </li>
                    </ul>
                  </li>
                  <li data-city="manchester" class="nav__item nav__item--bigchange">
                    <a href="https://streetsupport.net/manchester/bigchangemcr/" class=" nav__item-link nav__item-link--location-item nav__item-link--has-sub-nav">Big Change</a>
                    <ul class="nav__list nav__list--sub-list">
                      <li class="nav__item nav__item nav__item--mobile-only nav__item--sub-list-title">
                        <button class="sub-list-back-btn">Back</button>
                        <span class="sub-list-text">Big Change</span>
                      </li>
                      <li class="nav__item nav__item nav__item--mobile-only">
                        <a href="https://streetsupport.net/manchester/bigchangemcr">Big Change</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--bigchangeabout">
                        <a href="https://streetsupport.net/manchester/bigchangemcr/about/">About</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--bigchangepartners">
                        <a href="https://streetsupport.net/manchester/bigchangemcr/partners/">Partners</a>
                      </li>
                    </ul>
                  </li>
                  <li data-city="manchester" class="nav__item nav__item--toolkit">
                    <a href="https://streetsupport.net/manchester/standards-toolkit/" class=" nav__item-link nav__item-link--location-item nav__item-link--has-sub-nav">Standards Toolkit</a>
                    <ul class="nav__list nav__list--sub-list">
                      <li class="nav__item nav__item nav__item--mobile-only nav__item--sub-list-title">
                        <button class="sub-list-back-btn">Back</button>
                        <span class="sub-list-text">Standards Toolkit</span>
                      </li>
                      <li class="nav__item nav__item nav__item--mobile-only">
                        <a href="https://streetsupport.net/manchester/standards-toolkit/">Standards Toolkit</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--awards">
                        <a href="https://streetsupport.net/manchester/standards-toolkit/standards/">Standards</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--benefits">
                        <a href="https://streetsupport.net/manchester/standards-toolkit/benefits/">Benefits</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--training">
                        <a href="https://streetsupport.net/manchester/standards-toolkit/training/">Training</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--apply">
                        <a href="https://streetsupport.net/manchester/standards-toolkit/apply/">Apply</a>
                      </li>
                      <li class="nav__item nav__item--sub-item nav__item--get-in-touch">
                        <a href="https://streetsupport.net/manchester/standards-toolkit/get-in-touch/">Get in Touch</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="oldham">
            <dl class="hub-nav-container">
              <dt data-city="oldham" class="nav__item nav__item--oldham">
                <a href="https://streetsupport.net/oldham/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Oldham</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="oldham" class="nav__item nav__item--oldham-advice">
                    <a href="https://streetsupport.net/oldham/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="portsmouth">
            <dl class="hub-nav-container">
              <dt data-city="portsmouth" class="nav__item nav__item--portsmouth">
                <a href="https://streetsupport.net/portsmouth/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Portsmouth</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="portsmouth" class="nav__item nav__item--portsmouth-advice">
                    <a href="https://streetsupport.net/portsmouth/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="rochdale">
            <dl class="hub-nav-container">
              <dt data-city="rochdale" class="nav__item nav__item--rochdale">
                <a href="https://streetsupport.net/rochdale/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Rochdale</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="rochdale" class="nav__item nav__item--rochdale-advice">
                    <a href="https://streetsupport.net/rochdale/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="salford">
            <dl class="hub-nav-container">
              <dt data-city="salford" class="nav__item nav__item--salford">
                <a href="https://streetsupport.net/salford/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Salford</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="salford" class="nav__item nav__item--salford-advice">
                    <a href="https://streetsupport.net/salford/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="southampton">
            <dl class="hub-nav-container">
              <dt data-city="southampton" class="nav__item nav__item--southampton">
                <a href="https://streetsupport.net/southampton/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Southampton</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="southampton" class="nav__item nav__item--southampton-advice">
                    <a href="https://streetsupport.net/southampton/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="stockport">
            <dl class="hub-nav-container">
              <dt data-city="stockport" class="nav__item nav__item--stockport">
                <a href="https://streetsupport.net/stockport/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Stockport</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="stockport" class="nav__item nav__item--stockport-advice">
                    <a href="https://streetsupport.net/stockport/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="tameside">
            <dl class="hub-nav-container">
              <dt data-city="tameside" class="nav__item nav__item--tameside">
                <a href="https://streetsupport.net/tameside/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Tameside</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="tameside" class="nav__item nav__item--tameside-advice">
                    <a href="https://streetsupport.net/tameside/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="trafford">
            <dl class="hub-nav-container">
              <dt data-city="trafford" class="nav__item nav__item--trafford">
                <a href="https://streetsupport.net/trafford/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Trafford</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="trafford" class="nav__item nav__item--trafford-advice">
                    <a href="https://streetsupport.net/trafford/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li><li class="nav__item nav__item--hub-nav" data-city="wigan-and-leigh">
            <dl class="hub-nav-container">
              <dt data-city="wigan-and-leigh" class="nav__item nav__item--wigan-and-leigh">
                <a href="https://streetsupport.net/wigan-and-leigh/" class=" nav__item-link nav__item-link--location-item nav__item-link--hub-heading">Wigan and Leigh</a>
              </dt>
              <dd>
                <ul>
                  <li data-city="wigan-and-leigh" class="nav__item nav__item--wigan-and-leigh-advice">
                    <a href="https://streetsupport.net/wigan-and-leigh/advice" class="nav__item-link nav__item-link--location-item">Advice</a>
                  </li>
                </ul>
              </dd>
            </dl>
          </li>        
        </ul>
      </li>
    </ul>
  </nav>

        <div id="content" class="site-content">
