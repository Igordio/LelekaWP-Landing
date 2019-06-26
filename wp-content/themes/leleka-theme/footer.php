<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leleka-Theme
 */

?>
</main>

<?php
/**
 * @var $footer {Object} - description here
 */
$footer = get_field('footer');
?>
<footer class="footer">
  <div class="container">
    <div class="footer__wrap">
      <div class="footer__wrap__row__info">
        <div class="footer__logo">
          <?php if ($footer['footer_logo']) { ?>
            <a href="<?php echo home_url()?>" class="logo-img">
              <img src="<?= $footer['footer_logo']['url'] ?>" alt="<?php echo $footer['footer_logo']['alt'] ?>">
            </a>
          <?php } ?>
        </div>
        <div class="footer__contact-us">
          <div class="footer__title">
              <?= $footer['title_contact'] ?>
          </div>
          <div class="footer__contact-us--email">
            <a href="mailto:<?= $footer['contact_email'] ?>"><?= $footer['contact_email'] ?></a>
          </div>
          <div class="footer__contact-us--phone">
            <a href="tel:<?= $footer['contact_phone'] ?>"><?= $footer['contact_phone'] ?></a>
          </div>
        </div>
        <div class="footer__navigation">
          <div class="footer__title">
              <?= $footer['title_menu'] ?>
            <ul class="menu">
                <?php
                $menuArray = array(
                    'container' => false,
                    'echo' => false,
                    'items_wrap' => '%3$s',
                    'depth' => 0,
                );
                print strip_tags( wp_nav_menu($menuArray), '<li>, <a>');
                ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer__wrap__row__copyright">
        <p class="copyright"><?= $footer['copyright'] ?></p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</body>
</html>