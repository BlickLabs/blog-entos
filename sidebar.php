<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
  return;
}
?>

<?php
  if(is_single()) { ?>
    <aside id="secondary" class="widget-area widget-area-hero" role="complementary">
<?php
  } else if (!is_single()) { ?>
    <aside id="secondary" class="widget-area" role="complementary">
<?php
  }
?>
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
  <div class="widget-social-networks">
    <h2 class="widget-title">Follow me</h2>
    <div class="widget-social-icons-container">
      <a href="https://www.linkedin.com/in/erickponce/" target="_blank">
        <img class="widget-social-icons in-icon" src="<?php echo get_template_directory_uri() . '/img/icons/icon-in.png' ?>">
      </a>
      <a href="https://twitter.com/eponc3" target="_blank">
        <img class="widget-social-icons twitter-icon" src="<?php echo get_template_directory_uri() . '/img/icons/icon-twitter.png' ?>">
      </a>
      <a href="https://angel.co/eponce" target="_blank">
        <img class="widget-social-icons ok-icon" src="<?php echo get_template_directory_uri() . '/img/icons/icon-ok.png' ?>">
      </a>
    </div>
  </div>
</aside><!-- #secondary -->
