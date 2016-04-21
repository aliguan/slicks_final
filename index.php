<?php get_header('header');?>

        <section class="row">
            <div class="aboutwpr clearfix">
                <div class="four columns widgetspacing">
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
        <section class="row services">
            <div class="serviceicons">
                <ul>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/tire.png">
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/oil.png">
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/engine.png">
                    </li>
                    <li>
                        <img src="<?php bloginfo('template_directory'); ?>/img/battery.png">
                    </li>
                <ul>
                <div class="schedulebtn promobtn">
                    <h4><a href="<?php echo get_permalink(5); ?>">Set Up An Appointment</a></h4>
                </div>
        </section>
    </div><!-- container -->
<?php get_footer(); ?>
