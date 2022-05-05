<?php get_header(); ?>
<!-- Start Slider -->
<section class="slider-section swiper-container" data-aos="fade-in">
    <div class="swiper-wrapper">
        <?php
        $args = array('post_type' => 'banner', 'posts_per_page' => 3);
        $the_query = new WP_Query($args);
        if ($the_query->have_posts()) {
        ?>
            <?php
            while ($the_query->have_posts()) {
                $the_query->the_post();
            ?>
                <div class="slider-area height-700 swiper-slide overlay" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'home-banner', true); ?>)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="slider-content text-white pb-5 mb-5">
                                    <h2 class="display-3"><?php echo get_the_title(); ?></h2>
                                    <p><?php echo get_the_content(); ?></p>
                                    <a href="#" class="button_one mt-4">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>

    </div>
    <div class="swiper-pagination"></div>
</section>
<!-- End Slider -->
<!-- Start Services -->
<?php
$args = array('post_type' => 'page', 'name' => 'welcome-angel');
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    $the_query->the_post();
?>
    <section class="services-section translate_34">
        <div class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-xs-5 mt-xs-5" data-aos="fade-in" data-aos-delay="200">
                        <div class="single-service default_bg text-center text-white py-5 px-4">
                            <div class="service-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service_icon_01.png" alt="service one" class="img-fluid">
                            </div>
                            <div class="service-text">
                                <h4><?php echo get_field('lecture'); ?></h4>
                                <p><?php echo get_field('lecture_desc'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-xs-5" data-aos="fade-in" data-aos-delay="400">
                        <div class="single-service hover_bg text-center text-white py-5 px-4">
                            <div class="service-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service_icon_02.png" alt="service one" class="img-fluid">
                            </div>
                            <div class="service-text">
                                <h4><?php echo get_field('scholarship'); ?></h4>
                                <p><?php echo get_field('scholarship_desc'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-xs-5" data-aos="fade-in" data-aos-delay="600">
                        <div class="single-service default_bg text-center text-white py-5 px-4">
                            <div class="service-icon">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service_icon_03.png" alt="service one" class="img-fluid">
                            </div>
                            <div class="service-text">
                                <h4><?php echo get_field('library'); ?></h4>
                                <p><?php echo get_field('library_desc'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->
    <!-- Start Welcome Section -->
    <section class="welcome-section section-pb" data-aos="fade-in">
        <div class="welcome-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-3d-5 px-0 mt-3">
                        <div class="half_column_image">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'home-about', true); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid equal-height">
                        </div>
                    </div>
                    <div class="col-lg-6 equal-height">
                        <div class="half_column_content">
                            <h2 class="sub-title"><?php echo get_the_title(); ?></h2>
                            <p class="text-justify"><?php echo get_the_content(); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- End Welcome Section -->
<!-- Start Popup Videos Section -->
<section class="video-section" data-aos="fade-up">
    <div class="video-popup-area default_bg section-ptb">
        <div class="container">
            <div class="row mt-2" data-aos="fade-up">
                <div class="col-md-3 col-sm-6 mb-xs-2">
                    <div class="single-countdown">
                        <span class="counter">1998</span>
                        <p>Year Founded</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-xs-2">
                    <div class="single-countdown">
                        <span class="counter">45</span>
                        <p>Teachers</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-xs-2">
                    <div class="single-countdown">
                        <span class="counter">585</span>
                        <p>Students</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-xs-2">
                    <div class="single-countdown">
                        <span class="counter">125</span>
                        <p>Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Popup Videos Section -->
<!-- Start Our Team Carousel -->

<section class="team-section section-ptb" data-aos="fade-up">
    <div class="our-team-area show_navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb-4">
                        <h4>Management Board</h4>
                        <h2>Best Certified Faculty</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="our-team-carousel owl-carousel">
                        <?php
                        $args = array(
                            'post_type' => 'team', 'posts_per_page' => 5, 'order' => 'ASC',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'teamlevel',
                                    'field' => 'slug',
                                    'terms' => 'management',
                                    'operator' => 'IN'
                                )
                            )
                        );
                        $the_query = new WP_Query($args);
                        ?>
                        <?php while ($the_query->have_posts()) {
                            $the_query->the_post();  ?>
                            <div class="single-team">
                                <div class="member-image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'team', true); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <h6><?php echo get_the_title(); ?></h6>
                                        <span><?php echo wp_trim_words(get_the_content(), 2); ?></span>
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
<!-- Start Events Section -->
<section class="events-section section-ptb semi_dark_bg" data-aos="fade-up" style="padding-top: 70px!important;">
    <div class="events-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-4">
                        <h4>Our Events</h4>
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 4);
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
                $the_query->the_post();

            ?>
                <div class="row">
                    <div class="col-lg-6 mb-3d-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="event-content-one border">
                            <div class="event-image">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'home-event', true); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                                <div class="events-info bg-white">
                                    <div class="single-event-data">
                                        <p><i class="fas fa-calendar-alt"></i> <?php the_field('date'); ?></p>
                                    </div>
                                    <div class="single-event-data">
                                        <p><i class="fa fa-clock"></i> <?php the_field('start-time'); ?> - <?php the_field('end-time'); ?></p>
                                    </div>
                                    <div class="single-event-data">
                                        <p><i class="fas fa-map-marker-alt"></i> <?php the_field('location'); ?> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="event-text p-4 bg-white">
                                <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                                <p>Coluta nobis est eligendi optio cumque nihil impedit quo minusd quod maxime placeat facere possimus, omnis voluptas assumenda est. Our friendly support team is standing. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                <a href="<?php the_permalink(); ?>" class="button_one">Join Event <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="events-list">
                            <?php
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                            ?>
                                <div class="single-event mb-4">
                                    <div class="event-date">
                                        <?php
                                        $date_string = get_field('date');
                                        $date = date("d ", strtotime($date_string));
                                        $month = date("M ", strtotime($date_string));
                                        ?>
                                        <span><?php echo $date; ?></span>
                                        <p><?php echo $month; ?></p>
                                    </div>
                                    <div class="event-content">
                                        <h5><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h5>
                                        <div class="event-meta">
                                            <div class="single-meta">
                                                <p><i class="fa fa-clock"></i> <?php the_field('start-time'); ?> - <?php the_field('end-time'); ?></p>
                                            </div>
                                            <div class="single-meta">
                                                <p><i class="fas fa-map-marker-alt"></i> <?php the_field('location'); ?> </p>
                                            </div>
                                        </div>
                                        <p>Consectetur adipis icing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua....</p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Events Section -->


<?php get_footer();
