<?php get_header();
$cat_title = single_cat_title('', false);
// the_post();
?>
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3"><?php echo $cat_title; ?></h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="<?php echo get_site_url(); ?>">Home</a> - Our Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Our Team Carousel -->
<section class="team-section section-pt" data-aos="fade-up">
    <div class="our-team-area">
        <div class="container">
            <div class="row">
                <?php
                while (have_posts()) {
                    the_post();
                ?>
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'team', true); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                                </div>
                                <div class="member-info-4 text-center border-bottom-2 p-3">
                                    <div class="designation">
                                        <h5><?php echo get_the_title(); ?></h5>
                                        <span><?php echo get_the_content(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Our Team Carousel -->
<?php get_footer();
