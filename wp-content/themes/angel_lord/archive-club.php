<?php get_header(); ?>
<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Our Clubs</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="<?php echo get_site_url(); ?>">Home</a> - Our Clubs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Featured Section -->
<section class="featured-section-3 section-ptb-3" data-aos="fade-up">
    <div class="featured-area-wrapper show_navigation_2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto text-center">
                    <div class="section-title-2">
                        <p>ALA is committed to offering students varied opportunities for extracurricular participation.
                            The School believes that participation in extracurricular activities enables students to develop
                            talents that may find little expression in the classroom. Students can expose their strengths like multitasking,
                            organization skills, team building skills, leadership skills and service mindedness laying the foundation for
                            their future career as per their passion. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                while (have_posts()) {
                    the_post();
                ?>
                    <div class="col-lg-4 col-md-6 filter mb-5">
                        <div class="single-featured-5  bg-white text-center">
                            <div class="feature-image">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'club'); ?>" alt="Featured" class="img-fluid">

                            </div>
                            <div class="featured-text-and-info border-6">
                                <div class="feature-content p-4">
                                    <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                                    <p><?php echo wp_trim_words(get_the_content(), 15) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Section -->


<?php get_footer();
