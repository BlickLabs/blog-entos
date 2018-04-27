<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>
<!DOCTYPE html>
  <html <?php language_attributes(); ?> >
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112166710-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-112166710-2');
    </script>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
  </head>

  <body <?php body_class(); ?> >
    <div id="page" class="site">
      <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shoreditch' ); ?></a>

      <nav class="navbar">
        <div class="">
          <a href="http://entos.mx/">
            <img class="navbar-logo" src="<?php echo get_template_directory_uri() . '/img/logos/logo-entos.png' ?>" alt="Logo red of Entos">
          </a>
        </div>
        <div class="navbar-links-container">
          <div class="navbar-link-container">
            <a href="http://entos.mx/#section_home" class="go-section">
              <span class="fs-h4 gotham-medium">Home</span>
            </a>
            <div class="navbar-decorator"></div>
          </div>
          <div class="navbar-link-container">
            <a href="http://entos.mx/#section_ventures" class="go-section">
              <span class="fs-h4 gotham-medium">Ventures</span>
            </a>
            <div class="navbar-decorator""></div>
          </div>
          <div class="navbar-link-container">
            <a href="http://blog.entos.mx/" class="go-section">
              <span class="fs-h4 gotham-medium blog-active">Blog</span>
            </a>
            <div class="navbar-decorator active-decorator"></div>
          </div>
          <div class="navbar-link-container">
            <a href="http://entos.mx/#section_contact" class="go-section">
              <span class="fs-h4 gotham-medium">Contact</span>
            </a>
            <div class="navbar-decorator" id="contact-decorator"></div>
          </div>
        </div>
      </nav>
      <?php if (is_single()) { ?>
      <div id="content" class="site-content site-content-single">
      <?php } else { ?>
      <div id="content" class="site-content">
      <?php } ?>
        <?php if ( get_header_image() ) : ?>
          <div class="header-image">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
            </a>
          </div><!-- .header-image -->
        <?php endif; // End header image check. ?>

<script type="text/javascript">
  window.addEventListener('scroll', function(e) {
  if (e.view) {
    last_known_scroll_position = e.view.pageYOffset;
  }
  else {
    last_known_scroll_position = window.scrollY;
  }
  if (!ticking) {
    window.requestAnimationFrame(function() {
      doSomething(last_known_scroll_position);
      ticking = false
    });
  }
  ticking = true;
});

function showMenu() {
  document.querySelector('#menuContainer').style.width = '85%';
  document.querySelector('#hamburgerMenu').style.display = 'none';
}

function hideMenu() {
  document.querySelector('#menuContainer').style.width = '0%';
  document.querySelector('#hamburgerMenu').style.display = 'inline';
}

window.addEventListener('click', function(e) {
  if (!e.target.dataset.hasOwnProperty('attribute')) {
    hideMenu();
  }
});

/*Events of touchstart to mobile version*/

var showHamburger = document.querySelector('#hamburgerMenu');

showHamburger.addEventListener('touchstart', function(e) {
  e.preventDefault();
  showMenu();
});

var hideHamburger = document.querySelector('#hideHamburger');

hideHamburger.addEventListener('touchstart', function(e) {
  e.preventDefault();
  hideMenu();
});

/* Events of click to desktop version*/

showHamburger.addEventListener('click', function(e) {
  e.preventDefault();
  showMenu();
});

hideHamburger.addEventListener('click', function(e) {
  e.preventDefault();
  hideMenu();
});


</script>
