<?php /* Template Name: Custom Pricing Page */ ?>

<?php get_header('header');?>

        <section class="row">
            <div class="aboutwpr2 clearfix">
                <div class="four columns widgetspacing fix">
                    <?php dynamic_sidebar( 'pricing-left' ); ?>
                </div>
                <div class="four columns widgetspacing">
                    <?php dynamic_sidebar( 'pricing-middle' ); ?>

                </div>
                <div class="four columns widgetspacing">
                    <?php dynamic_sidebar( 'pricing-right' ); ?>
                </div>
            </div>
        </section>

        <section class="row services" style="margin-bottom: 2em;">
            <div class="serviceicons" style="border: 10px solid #fcd878">
                <ul>
                    <h1 style="text-align:center"><i class="fa fa-usd" aria-hidden="true"></i> Promotions <i class="fa fa-usd" aria-hidden="true"></i></h1>
                    <li>
                        <h2> For Limited Time Only</h2>
                    </li>
                    <li>
                        <h3>Ask For Slick's Tire Deal</h3>
                        <p>$149 for 4 Brand New Wheels!</p>
                    </li>
                    <li>
                        <h3>Custom Consultation</h3>
                        <p>Bring your dream beauty to life!
                        Only $25 for a Consultation!</p>
                    </li>
                    <li>
                        <h3>Vroom Vroom Deal</h3>
                        <p>Change your Engine to an 8 Cylinder Monster!
                        Only $730!</p>
                    </li>
            </div>
        </section>
    </div><!-- container -->
<?php get_footer(); ?>
