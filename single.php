 <?php get_header(); ?> 
    <div class="page-name">
      <p>blog</p>
    </div>

    <div class="container flex">
      <div class="flex-child main-container">
        <div class="article-container">
           <?php get_header(); ?> 
            <?php if (have_posts()) : the_post(); ?>
             <div class="article-title">
               <h1><?php the_title(); ?>
              </h1>
            
            <div class="flex">
              <div class="flex-child">
                  <?php if (has_category()) : ?> 
                     <p class="category-tag"><?php echo get_the_category_list(' '); ?></p> 
                       <?php endif; ?> 
                <p class="tags"><?php the_tags('', '  '); ?></p>
              </div>
              <p class="date-tag"><?php echo get_the_date('Y-m-d'); ?></p> 
            </div>
          </div>

          <div class="single-eyecatch">
             <?php if (has_post_thumbnail()) : ?> 
              <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
                <?php endif; ?>
              </div> 
               <div class="main-text">
                 <?php the_content(); ?>
                </div>
              </div>
              <?php endif; ?> 
           
         <div id="article" class="wrap">
          <h2 class="section-title">blog</h2>
          <div class="flex">
             <?php if (has_category()) {
               $categorys = get_the_category(); $categorykwd = array(); foreach ($categorys as $cat) {
                 $categorykwd[] = $cat->term_id;
                 }
               } 
              ?>
                <?php $args = array(
                'post_type' => 'post',
                'posts_per_page' => '3',
                'post__not_in' => array($post->ID), 'category__in' => $categorykwd,
                'orderby' => 'rand'
                );
                $relation_query = new WP_Query($args); 
                ?>

                <?php while ($relation_query->have_posts()) : $relation_query->the_post(); ?>
                <a href="" class="article-cat">
                  <?php if (has_post_thumbnail()) : ?>
                    :\\        <?php the_post_thumbnail(); ?>
                    <?php else : ?> 
                     <img src="<?php echo get_template_directory_uri(); ?>/img/no-images.png" alt="no-img">
                      <?php endif; ?>
                      <?php if (!is_category() && has_category()) : ?> 
                       <p class="category-tag">
                       <?php
                       $postcat = get_the_category();
                       echo $postcat[0]->name;
                       ?></p>
                       <?php endif; ?>
                        <div class="text-content">
                        <p class="article__date"><?php echo get_the_date('Y-m-d'); ?></p>
                        <h3 class="article__title">
                        <?php the_title(); ?>
                        </h3>
                      <div class="article-tags">
                          <p class="article-tags__inner">
                          <?php $posttags = get_the_tags(); 
                          if ($posttags) {
                          foreach ($posttags as $tag) { 
                            echo '<span class="tag-span">' . $tag->name . '</span>';
                            }
                            } 
                            ?>
                            </p>
                        </div>
                      </div>
                       </a> 
                      <?php endwhile; ?>
                      <?php wp_reset_postdata(); ?>
                      </div>
              </div>_
          </div>
                 <?php get_sidebar(); ?>
        </div>
        <?php get_footer(); ?>

           
             
             