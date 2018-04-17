<?php
/**
* Template part for displaying posts.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package Shoreditch
*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wicore-article'); ?>>
  <?php if (!is_single()) { ?>
      <div class="hentry-wrapper hentry-wrapper-wicore">
  <?php } else if (is_single()) { ?>
    <div class="hentry-wrapper">
  <?php } ?>

  <?php
  if ( is_single() && has_post_thumbnail()) {
  } else if (is_single() && !has_post_thumbnail()) { ?>
    <header class="entry-header">
      <div class="entry-header-wrapper">
  <?php
    the_title( '<h1 class="entry-title">', '</h1>' );
  ?>
      </div><!-- .entry-header-wrapper -->
    </header><!-- .entry-header -->
  <?php
  } else if (!is_single() && has_post_thumbnail()) { ?>
    <header class="entry-header" <?php shoreditch_background_image(); ?>>
    </header><!-- .entry-header -->
    <div class="entry-posts-content">
      <div class="entry-titledate-container">
        <div>
          <footer class="entry-footer">
            <span class="post-info gotham-lightitalic">By <?php the_author(); ?> </span>
            <span class="post-info gotham-lightitalic">In Blog</span>
            <?php shoreditch_entry_footer(); ?>
          </footer><!-- .entry-footer -->
        </div>
        <div class="entry-header-wrapper entry-header-wrapper-wicore">
          <?php
            the_title( '<h2 class="entry-title"><a class="entry-title-wicore" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            ?>
        </div><!-- .entry-header-wrapper -->
      </div>
  <?php
  } else { ?>
    <header class="entry-header">
      <div class="entry-header-wrapper">
  <?php
    the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
  ?>
      </div><!-- .entry-header-wrapper -->
    </header><!-- .entry-header -->
  <?php
  }
  ?>


    <?php if(is_single()) { ?>
    <div class="entry-content entry-content-single">
    <?php } else if (!is_single()) { ?>
    <div class="entry-content entry-content-wicore">
    <?php } ?>
      <?php
      if ( is_single() ) {
        the_content( sprintf(
        /* translators: %s: Name of current post. */
          wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'shoreditch' ), array( 'span' => array( 'class' => array() ) ) ),
          the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );
      } else {
        the_excerpt( sprintf(
        /* translators: %s: Name of current post. */
          wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'shoreditch' ), array( 'span' => array( 'class' => array() ) ) ),
          the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );
      }
      wp_link_pages( array(
        'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'shoreditch' ) . '</span>',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
        'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'shoreditch' ) . ' </span>%',
        'separator'   => '<span class="screen-reader-text">, </span>',
      ) );
      ?>
    </div><!-- .entry-content -->

  </div>

    <?php
    if ( is_single() ) {
      get_template_part( 'template-parts/content', 'author' );
    }
    ?>
  </div><!-- .hentry-wrapper -->
</article><!-- #post-## -->
