
<?php get_header(); ?> 
    <div class="page-name">
      <p>category</p>
    </div>

    <div class="container flex">
      <div class="flex-child main-container">
        <h2 class="page-name__title"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
      </h2>
      <div class="flex">
        <?php if (have_posts()): ?>
          <?php while (have_posts()) : the_post(); ?>
           <a href="<?php the_permalink(); ?>" class="article-cat"> 
             <?php if( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail(); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
                <?php endif; ?>

                 <h3><?php the_title(); ?></h3>
                 <?php if (!is_category() && has_category()): ?>
                  <p class="category-tag">
                    <?php
                    $postcat = get_the_category();
                    echo $postcat[0]->name;
                    ?> 
                    </p>
                    <?php endif; ?>
                     <?php $posttags=get_the_tags();if($posttags){foreach( $posttags as $tag){echo '<span class="tag">'.$tag->name.'</span>';}} ?>
                     <p class="date-tag"><?php echo get_the_date('Y-m-d'); ?></p>
                    </a>
                    <?php endwhile; ?>
                    <?php else: ?>
                      <!-- 投稿が無い場合の処理 -->
                      <p>投稿が見つかりません。 </p>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php get_sidebar(); ?>
                </div>
                
              </div>
              <?php get_footer(); ?>

        