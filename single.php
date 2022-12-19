<? get_header(); ?>
<main>
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>
      <article class="single">
        <h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>
        <p>🧑🏽 <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
        <p>🗓️ <?php the_time('g:i, j F, Y'); ?></p>
        <p>🏷️ <?php the_category( ' | ' ); ?></p>

        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail">
            <img src="<?php the_post_thumbnail_url('large'); ?>">
          </div>
        <?php endif; ?>

        <div class="content"><?php the_content(); ?></div>
      </article>
  <?php endwhile;
endif;
?>
</main>
<?php get_sidebar(); ?>

<?php get_footer(); ?>