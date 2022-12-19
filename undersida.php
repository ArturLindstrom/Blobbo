<?php //Template Name: Undersida ?>

<? get_header(); ?>
<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <main class="undersida" >
        <article>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </article>

        <?php
          wp_nav_menu(array(
            'theme_location' => 'small-menu',
            'menu_class' => 'small-menu'
          ));
        ?>
      </main>
    <?php endwhile;
  endif;
?>



<?php get_footer(); ?>
