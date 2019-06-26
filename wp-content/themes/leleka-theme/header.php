<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Leleka-Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name')?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="apple-touch-icon" sizes="57x57" href="./images/icons/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="./images/icons/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./images/icons/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="./images/icons/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./images/icons/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="./images/icons/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="./images/icons/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="./images/icons/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="./images/icons/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="./images/icons/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/images/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="./images/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
  <link rel="manifest" href="<?= get_template_directory_uri() ?>/assets/scripts/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#66c1c0">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
  <div class="container">
    <div class="header__wrap">
      <div class="header__logo">
        <?php
        /**
         * Return image logo website
         *
         * @var {{$imageLogo: Object}} - used for stored site Logo
         *
         */
          $imageLogo = get_field('header_logo');
           if( !empty($imageLogo) ): ?>
            <a href="<?php echo home_url()?>" class="logo-img"><img src="<?php echo $imageLogo['url']; ?>" alt="<?php echo $imageLogo['alt']; ?>"></a>
        <?php endif; ?>
      </div>
      <div class="header__navigation">
        <div class="header__navigation__menu">
          <div class="menu__icon">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <ul class="menu">
            <?php
            /**
             * Return menu items
             *
             * @var {{$menuArray: Object}} - used for stored site menu items
             */
              $menuArray = array(
                'container' => false,
                  'echo' => false,
                  'items_wrap' => '%3$s',
                  'depth' => 0,
              );
              echo strip_tags( wp_nav_menu($menuArray), '<li>, <a>');
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

  <main>
