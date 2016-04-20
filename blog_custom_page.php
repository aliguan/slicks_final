/*
Template Name: Blog Page
*/

<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=5&paged='. get_query_var('paged')); ?>
    <div class="row">
        <div class="twelve columns">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
    </div>
<?php get_footer(); ?>
