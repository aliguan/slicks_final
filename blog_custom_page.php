<?php   /*
Template Name: Blog Page
*/ ?>

<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>
    <div class="row" style="padding: 2em;">
        <div class="twelve columns">
            <h1>Slick's Blog</h1>
            <?php if (have_posts()) :
               while (have_posts()) : the_post(); ?>
               <div class="three columns excerptpic">
                   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                   <?php the_post_thumbnail(); ?>
                   </a>
               </div>
               <div class="eight columns excerpt list_post">
                  <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"> <h2><?php the_title(); ?></h2></a><?php the_excerpt('Continue Reading...'); ?>
               </div>
           <?php endwhile; ?>
                <!-- Navigation -->
           <div class="navigation">
               <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
           </div>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </div>
<?php get_footer(); ?>
