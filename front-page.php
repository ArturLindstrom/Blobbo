<? get_header(); ?>


<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <main class="front-page-main">
        <?php if (has_post_thumbnail()) : ?>
          <div class="hero-image" style="background-image: url(<?php the_post_thumbnail_url();?>)">
            <h1 class="bounce-in-top"><?php the_title(); ?></h1>
            <div class="hero-paragraph bounce-in-bottom"><?php the_content() ?></div>
          </div>
          <?php endif; ?>
      </main>
    <?php endwhile;
  endif;
?>

<?php get_footer(); ?>