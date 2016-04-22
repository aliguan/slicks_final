<?php /* Template Name: Custom Pricing Page */ ?>

<?php get_header('header');?>

        <section class="row">
            <div class="aboutwpr clearfix">
                <div class="four columns widgetspacing fix">
                    <?php dynamic_sidebar( 'whoarewe-widget' ); ?>
                </div>
                <div class="four columns widgetspacing">
                    <?php dynamic_sidebar( 'whatwedo-widget' ); ?>

                </div>
                <div class="four columns widgetspacing">
                    <?php dynamic_sidebar( 'howwedo-widget' ); ?>
                </div>
            </div>
        </section>
    </div><!-- container -->
<?php get_footer(); ?>
