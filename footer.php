<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Shoreditch
*/

?>
      </div>
      <footer class="footer">
        <div>
          <img class="footer-logo" src="<?php echo get_template_directory_uri() . '/img/logos/logo-entos-white.png' ?>" alt="Logo in white color of Entos" />
        </div>
        <div class="footer-section-container">
          <a href="">
            <span class="footer-section fs-h4 gotham-medium">Home</span>
          </a>
          <a href="">
            <span class="footer-section fs-h4 gotham-medium">Ventures</span>
          </a>
          <a href="">
            <span class="footer-section fs-h4 gotham-medium">Blog</span>
          </a>
          <a href="">
            <span class="footer-section fs-h4 gotham-medium">Contact</span>
          </a>
        </div>
        <div class="footer-icons-container">
          <div class="footer-icon-container">
            <a href="https://www.linkedin.com/in/erickponce/" target="_blank">
              <img class="footer-icon" src="<?php echo get_template_directory_uri() . '/img/icons/icon-in.png' ?>" alt="Icon Linkedin">
            </a>
          </div>
          <div class="footer-icon-container">
            <a href="https://twitter.com/eponc3" target="_blank">
              <img class="footer-icon" src="<?php echo get_template_directory_uri() . '/img/icons/icon-twitter.png' ?>" alt="Icon Twitter">
            </a>
          </div>
          <div class="footer-icon-container">
            <a href="https://angel.co/eponce" target="_blank">
              <img class="footer-icon" src="<?php echo get_template_directory_uri() . '/img/icons/icon-ok.png' ?>" alt="Icon Ok">
            </a>
          </div>
        </div>
      </footer>
    </div>

  <?php wp_footer(); ?>
  </body>
</html>
