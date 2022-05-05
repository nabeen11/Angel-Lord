<!-- Template Name: History
 -->
 <?php get_header();
the_post(); ?>
<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">History</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="<?php echo get_site_url(); ?>">Home</a> - History</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Services -->
<section class="featured-2-section section-ptb" data-aos="fade-up" data-aos-delay="300">
    <div class="featured-area-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title">
                        <h2>Our History </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mb-3d-5">
                    <div class="featured-2-text">
                        <p><?php echo apply_filters('the_content', get_the_content()); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Countdown -->
<div class="countdown-area default_bg section-ptb overlay_2" style="background: url(<?php echo get_template_directory_uri(); ?>/images/countdown_bg.jpg);" data-aos="fade-up" data-aos-delay="300">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-xs-5">
                <div class="single-countdown">
                    <span class="counter">1998</span>
                    <p>Year Founded</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-xs-5">
                <div class="single-countdown">
                    <span class="counter">45</span>
                    <p>Teachers</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-xs-5">
                <div class="single-countdown">
                    <span class="counter">585</span>
                    <p>Students</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-countdown">
                    <span class="counter">125</span>
                    <p>Awards</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Countdown -->

<!-- Start Our Team Carousel -->
<section class="team-section section-ptb dark_3_bg" data-aos="fade-up" data-aos-delay="300">
    <div class="our-team-area show_navigation_3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="section-title-2 text-center mb-4">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="our-team-carousel-3 owl-carousel">
                        <?php
                        $args = array(
                            'post_type' => 'team',
                            'order' => 'ASC'
                        );
                        $the_query = new WP_Query($args);
                        ?>
                        <?php while ($the_query->have_posts()) {
                            $the_query->the_post();  ?>
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'team', true); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                                </div>
                                <div class="member-info-3 border border-top-0 text-center p-4">
                                    <div class="designation mb-3">
                                        <h6><?php echo get_the_title(); ?></h6>
                                        <span><?php echo wp_trim_words(get_the_content(), 3); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Team Carousel -->


<?php get_footer();

