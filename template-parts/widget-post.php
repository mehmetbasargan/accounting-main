<article <?php post_class('block-21 mb-4 d-flex'); ?> id="post-<?php the_ID(); ?>">
   <a class="blog-img mr-4" style="background-image: url(<?php echo the_post_thumbnail_url('widget_img'); ?>)"></a>
   <div class="text">
      <h3 class="heading">
         <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
         </a>
      </h3>
      <div class="meta">
         <div>
            <a href="#"><span class="icon-calendar"></span><?php the_time('j, M,  Y'); ?></a>
         </div>

         <div class="posts-content-views">
            <span class="post-views">
               <i class="fa fa-eye"></i>
               <?php if (function_exists('the_views')) {
                  the_views();
               } ?>
            </span>
            <span class="comment-number">
               <i class="fa fa-comment"></i>
               <?php echo get_comments_number(); ?>
            </span>
         </div>
      </div>
   </div>
</article>