<?php get_header('header');?>

        <section class="row">
            <div class="aboutwpr clearfix">
                <a id="about"><div class="four columns widgetspacing fix"></a>
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
                <h1 style="text-align:center">Our Services</h1>
                <ul>
                    <li class="hvr-grow">
                        <a  href="pricing"><img src="<?php bloginfo('template_directory'); ?>/img/tire.png"></a>
                    </li>
                    <li class="hvr-grow">
                        <a href="pricing"><img src="<?php bloginfo('template_directory'); ?>/img/oil.png"></a>
                    </li>
                    <li class="hvr-grow">
                        <a  href="pricing"><img src="<?php bloginfo('template_directory'); ?>/img/engine.png"></a>
                    </li>
                    <li class="hvr-grow">
                        <a  href="pricing"><img src="<?php bloginfo('template_directory'); ?>/img/battery.png"></a>
                    </li>
                <ul style="padding: 2em;">
                <div class="schedulebtn promobtn">
                    <h4><a href="<?php echo get_permalink(5); ?>">Set Up An Appointment</a></h4>
                </div>
        </section>
    </div><!-- container -->
<?php get_footer(); ?>
