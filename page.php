<? get_header(); ?>

<main class="page-main">
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>
      <article>
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

<?php get_footer(); ?>