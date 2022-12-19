<?php get_header(); ?>
<?php get_sidebar(); ?>

<main>
    <?php
    $search_term = get_search_query();
    echo "<h1>Sökresultat för: $search_term</h1>";
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
</main>

<?php get_footer(); ?>