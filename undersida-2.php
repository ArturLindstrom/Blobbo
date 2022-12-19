<?php //Template Name: Undersida 2 ?>

<? get_header(); ?>
<code>undersida-2.php</code>
<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <main class="undersida-2">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'small-menu',
              'menu_class' => 'small-menu'
            ));
          ?>
          <article>
            <h1><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
              <img src="<?php the_post_thumbnail_url(); ?>">
            </div>
            <?php endif; ?>
            <?php the_content(); ?>
          </article>
      </main>
    <?php endwhile;
  endif;
?>

<?php get_footer(); ?>

