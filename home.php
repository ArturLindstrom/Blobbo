<? get_header(); ?>
<main>
  
  
 
<?php
if (have_posts()) :
  while (have_posts()) : the_post(); ?>
      <article class="home-article">
        <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumbnail" style="background-image: url(<?php the_post_thumbnail_url()?>)"></div>
        <h2 class="home-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <?php endif; ?>
        <section class="home-meta">
          <p>🧑🏽‍🦲 <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
          <p>🏷️ <?php the_category( ' | ' ); ?></p>
          <p>🗓️ <?php the_time('j/n, Y'); ?></p>
        </section>
        <section class="home-excerpt"><?php the_excerpt(); ?></section>
      </article>
  <?php endwhile;
endif;
?>
<div class="pagination">
  <?php
    global $wp_query;
    $big = 999999999;
  
    echo paginate_links(array(
      'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format' => '?paged=%#%',
      'current' => max(1, get_query_var('paged')),
      'total' => $wp_query->max_num_pages
    ));
  ?>
</div>
</main>

<?php 
  get_sidebar();
?>

<?php get_footer(); ?>