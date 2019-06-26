<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Leleka-Theme
 */

get_header();
?>
  <section class="errorPage">
    <div class="container">
      <div class="errorPage__wrap">
        <p class="errorPage__wrap__number"><?= __('404', 'leleka') ?></p>
        <p class="errorPage__wrap__description"><?= __('Page not found', 'leleka') ?></p>
        <a class="errorPage__wrap__btn" href="<?php echo home_url() ?>"><?= __('Back to home page', 'leleka') ?></a>
      </div>
    </div>
  </section>
<?php
get_footer();
