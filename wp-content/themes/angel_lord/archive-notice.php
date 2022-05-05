<?php get_header(); ?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Notices</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Notices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!--Start Page -->
<div class="page-wrapper section-ptb-3" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="events-wrapper">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <div class="single-event-info p-4 mb-5">
                            <div class="single-event-date p-3">
                                <span><?php echo get_the_date('d'); ?></span>
                                <p><?php echo get_the_date('F'); ?></p>
                            </div>
                            <div class="single-event-content">
                                <p><i class="fas fa-edit"></i>Notice From School</p>
                                <h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                            </div>
                            <div class="event-link">
                                <a href="<?php the_permalink(); ?>" class="button_one_alt">Read More</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();
