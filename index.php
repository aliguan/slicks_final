<?php get_header('header');?>

        <section class="row">

            <div class="four columns">
                <?php dynamic_sidebar( 'whoarewe-widget' ); ?>
            </div>
            <div class="four columns">
                <?php dynamic_sidebar( 'whatwedo-widget' ); ?>

            </div>
            <div class="four columns">
                <?php dynamic_sidebar( 'howwedo-widget' ); ?>
            </div>
        </section>

<?php get_footer(); ?>
