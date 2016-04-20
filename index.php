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
                    </li>
                <ul>
        </section>

<?php get_footer(); ?>
