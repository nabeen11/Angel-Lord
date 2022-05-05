<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Angel_Lord
 */

?>
<?php
$args = array('post_type' => 'page', 'name' => 'popup-image');
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    $the_query->the_post();
?>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo get_the_content(); ?></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<footer data-aos="fade-up">
    <div class="footer-area default_bg">
        <div class="footer-top section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-xs-5">
                        <div class="single_widget">
                            <div class="address-widget">
                                <div class="footer-logo">
                                    <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile-logo.png" alt="logo" class="img-fluid logo"></a>
                                </div>
                                <p>Koteshwor, Kathmandu <br>angellord@gmail.com</p>
                                <p>+01-4601241, 01-4601171</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3d-5">
                        <div class="single_widget">
                            <h3>Useful Links</h3>
                            <div class="widget-list">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu' => 'footer_menu',
                                    'container' => '',
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-xs-5">
                        <div class="single_widget">
                            <h3>Our Services</h3>
                            <div class="widget-list">
                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu' => 'footer_menu2',
                                    'container' => '',
                                ));
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_widget">
                            <h3>Latest Notice</h3>
                            <?php
                            $args = array('post_type' => 'notice', 'posts_per_page' => 1);
                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) {
                            ?>
                                <?php
                                while ($the_query->have_posts()) {
                                    $the_query->the_post();
                                ?>
                                    <div class="widget-item">
                                        <div class="widget-image">
                                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?php echo get_the_title(); ?>"></a>
                                        </div>
                                        <div class="widget-content">
                                            <h5><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
                                            <div class="widget-meta">
                                                <span><?php echo get_the_date(); ?></span>
                                            </div>
                                        </div>
                                    </div>
                            <?php }
                            } ?>
                            <h5>Payment Accepted</h5>
                            <div class="widget-item">
                                <div class="widget-payment">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/payment.png" height="200px" width="500px" alt="online payment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-wrapper border-top py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom">
                            <div class="copyright-text">
                                <p>Angel Lord Academy. All Rights Reserved.</p>
                            </div>
                            <div class="social-accounts">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-top">
        <div class="scroll-icon">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>
</footer>
<!-- End Footer -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/aos.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootnavbar.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php

if (is_front_page() == true) {
?>
    <script>
        $(document).ready(function() {
            $("#myModal").modal('show');
        });
    </script>
<?php
}
?>

<script>
    $('[data-fancybox]').fancybox({
        // Options will go here
        buttons: [
            'close'
        ],
        wheel: false,
        transitionEffect: "slide",
        // thumbs          : false,
        // hash            : false,
        loop: true,
        // keyboard        : true,
        toolbar: false,
        // animationEffect : false,
        // arrows          : true,
        clickContent: false
    });
</script>
<?php wp_footer(); ?>

</body>

</html>