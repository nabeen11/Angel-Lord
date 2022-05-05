<!-- Template Name: Alumni
 -->
<?php get_header(); ?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Alumni</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Alumni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Our Team Carousel -->
<section class="team-section section-ptb" data-aos="fade-up" data-delay="400">
    <div class="our-team-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="section-title-2 text-center mb-4">
                        <h2>Our Students</h2>
                        <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="our-team-carousel-4 border-opt owl-carousel">
                        <?php
                        if (have_rows('students_details')) {
                            while (have_rows('students_details')) {
                                the_row();
                                $file = get_sub_field('image');
                        ?>
                                <div class="single-team bg-white">
                                    <div class="member-image-2">
                                        <img src="<?php echo $file['url']; ?>" alt="team member" class="img-fluid">
                                    </div>
                                    <div class="member-info-3 border border-top-0 text-center p-4">
                                        <div class="designation mb-3">
                                            <h5><?php echo get_sub_field('name') ?></h5>
                                            <span><?php echo get_sub_field('position') ?></span>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Team Carousel -->
<section class="testimonials-section section-ptb  overlay_2" data-aos="fade-up" data-delay="400">
    <div class="testimonials-area text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center has_bordered">
                        <h2 class="text-white">What Our Students Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="testimonials-wrapper-4 owl-carousel">
                        <?php
                        $args = array('post_type' => 'testimonial', 'posts_per_page' => 3);
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) {
                        ?>
                            <?php
                            while ($the_query->have_posts()) {
                                $the_query->the_post();
                            ?>
                                <div class="single-testimonial-4 text-center">
                                    <p><?php echo get_the_content(); ?></p>
                                    <div class="testimonial-referance">
                                        <strong><?php echo get_the_title(); ?> </strong>
                                        <span> - <?php echo get_field('position') ?></span>
                                    </div>
                                </div>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();
