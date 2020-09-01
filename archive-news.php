 <?php get_header(); ?>
    <div class="page-name">
      <p>news</p>
    </div>

    <div class="container flex">
      <div class="flex-child main-container">
        <div id="news" class="wrap">
          <h2 class="section-title">news一覧</h2>
          <ul class="news-contain">
              <?php if (have_posts()): ?>
                <?php while (have_posts()) : the_post(); ?> 
            <li class="news-list">
              <p class="news-date"><?php echo get_the_date('Y-m-d'); ?></p>
              <a href="" class="news-category">
              <?php
              $days = 3;
              $today = date_i18n('U'); $entry_day = get_the_time('U');
              $keika = date('U',($today - $entry_day)) / 86400; 
              if ( $days > $keika ): $limit = 3;
              $num = $wp_query->current_post; if ( $limit > $num ): 
              echo 'New';
              endif;
              endif;
              ?></a>

             <a href="<?php the_permalink(); ?>" class="news-title"
             ><?php the_title(); ?></a 
             >
            </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
      <?php get_sidebar(); ?>
    </div>
    <?php get_footer(); ?>