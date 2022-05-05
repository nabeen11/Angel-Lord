<!-- Template Name: Admission
 -->
<?php get_header();
$image = get_field('scholarship_image');
?>
<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Admission</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="<?php echo get_site_url(); ?>">Home</a> - Admission</p>
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
                        <h2 class="sub-title">Admission Procedure</h2>
                        <p><?php echo get_the_content(); ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="welcome-section section-pb">
    <div class="welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 equal-height ">
                    <div class="half_column_content">
                        <h2 class="sub-title">Scholarship Plan</h2>
                        <p><?php the_field('scholarship'); ?></p>

                    </div>
                </div>
                <div class="col-lg-6 mt-3d-5" data-aos="fade-up" data-aos-delay="400">
                    <div class="half_column_image half_column_image_2">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="welcome" class="img-fluid equal-height">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services -->

<!-- Start Featured-2 Section-->

<section class="featured-2-section section-pb" data-aos="fade-up" data-aos-delay="300">
    <div class="featured-area-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-title">
                        <h2>Application Form </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="featured-2-wrapper">
                        <div class="theme-list-3">
                            <ul>
                                <?php
                                if (have_rows('form')) {
                                    while (have_rows('form')) {
                                        the_row();
                                        $file = get_sub_field('file');
                                ?>
                                        <li><a target="_blank" href="<?php echo $file['url']; ?>"><?php echo get_sub_field('class-level') ?></a></li>
                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3d-5">
                    <div class="featured-2-text">
                        <button class="special-button" onclick="window.location.href = '<?php echo get_permalink(get_page_by_path('online-form')); ?>';">Apply Online <i class="fa fa-angle-right"></i> <span class="button_icon"><i class="far fa-file-alt"></i></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured-2 Section-->


<?php get_footer();
