<aside>
  <section>
    <h3>Sök efter:</h3>
    <form action="<?php echo site_url('/'); ?>" method="get">
      <input type="text" name="s" id="search" value="<?php the_search_query(); ?>">
      <button type="submit">Sök</button>
    </form>
  </section>
  <nav class="side">
    <h3>Sidor</h3>
    <?php
      wp_nav_menu(array(
        'theme_location' => 'sidebar-menu',
        'menu_class' => 'sidebar-menu'
      ));
    ?>
      <h3>Arkiv</h3>
      <!-- get a link for every month containing posts -->
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
        

      <h3>Kategorier</h3>
        <!-- get a link for every category containing posts and show how many posts in each category -->
        <ul>
            <?php wp_list_categories('title_li=&show_count=1'); ?>
        </ul>
  </nav>
</aside>



  