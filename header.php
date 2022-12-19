<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
  <header id="header">
    <section class="header-top">
      <h1>
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>
      <?php get_search_form(); ?>
    </section>
    
      <?php
      wp_nav_menu(array(
        'theme_location' => 'top-menu',
        'menu_class' => 'top-bar',
        'container' => 'nav'
      ));
      ?>
  </header>
