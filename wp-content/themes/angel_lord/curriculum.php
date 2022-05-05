<!-- Template Name: Curriculum
 -->
 <?php get_header();
?>
<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Curriculum</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Curriculum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Services -->
<section class="welcome-section section-ptb">
    <div class="welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-3d-5" data-aos="fade-up" data-aos-delay="400">
                    <div class="half_column_image half_column_image_2">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="welcome" class="img-fluid equal-height">
                    </div>
                </div>
                <div class="col-lg-6 equal-height ">
                    <div class="half_column_content">
                        <h2 class="sub-title">Curriculum</h2>
                        <p><?php echo apply_filters('the_content', get_the_content()); ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();
