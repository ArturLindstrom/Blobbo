<?php //Template Name: Undersida 4 ?>

<? get_header(); ?>
<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <main class="undersida-4">
          <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </article>
          <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <img src="<?php the_post_thumbnail_url('large'); ?>">
          </div>
        <?php endif; ?>
      </main>
    <?php endwhile;
  endif;
?>

<?php get_footer(); ?>

