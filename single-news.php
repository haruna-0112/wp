    <?php get_header(); ?>

    <div class="page-name">
      <p>news</p>
    </div>

    <div class="container flex">
      <div class="flex-child main-container">
        <div class="article-container">
           <?php if(have_posts()): the_post(); ?>
          <div class="article-title news-single">
            <p class="category-tag">
              <?php
              $days = 3;
              $today = date_i18n('U');
              $entry_day = get_the_time('U');
              $keika = date('U',($today - $entry_day)) / 86400;
              if ( $days > $keika ):
              $limit = 3;
              $num = $wp_query->current_post;
              if ( $limit > $num ):
              echo 'New';
              endif;
            endif;
              ?></p>
                <h1><?php the_title(); ?></h1> 

            <p class="date-tag"><?php echo get_the_date('Y-m-d'); ?></p> 
          </div>

          <div class="single-eyecatch">
            <?php if( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
                <?php endif; ?>
              </div>
              <div><?php the_content(); ?></div>
            </div>
            <?php endif; ?>
          </div>
          <?php get_sidebar(); ?>
        </div>
        <?php get_footer(); ?>

            