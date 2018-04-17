<?php
/**
 * Template part for displaying hero image on the single page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

  if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
    return;
  }
?>

  <div class="entry-hero entry-hero-wicore" <?php shoreditch_background_image(); ?>>

  </div><!-- .entry-hero -->
  <div class="entry-hero-wrapper">
    <?php
      shoreditch_entry_meta();
      the_title( '<h1 class="entry-title entry-hero-title-wicore">', '</h1>' );
    ?>
  </div><!-- .entry-hero-wrapper -->
  <div>
</div>