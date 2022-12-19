<?php //Template Name: Undersida 3 ?>

<? get_header(); ?>
<code>undersida-3.php</code>
<?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <main class="undersida-3">
          <article>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </article>
         
      </main>
    <?php endwhile;
  endif;
?>

<?php get_footer(); ?>

