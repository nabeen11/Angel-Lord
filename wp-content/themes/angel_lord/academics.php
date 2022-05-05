<!-- Template Name: Academic
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
                        <h1 class="display-3">Academics</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Academics</p>
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
                        <h2 class="sub-title">Academic Program</h2>
                        <p><?php echo apply_filters('the_content', get_the_content()); ?>
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
                <div class="col-lg-4 equal-height ">
                    <div class="half_column_content">
                        <h2 class="sub-title">Curriculum</h2>
                        <p><?php the_field('curriculum'); ?></p>

                    </div>
                </div>
                <div class="col-lg-4 equal-height ">
                    <div class="half_column_content">
                        <h2 class="sub-title">Examination</h2>
                        <p><?php the_field('examination'); ?></p>

                    </div>
                </div>
                <div class="col-lg-4 equal-height ">
                    <div class="half_column_content">
                        <h2 class="sub-title">Evaluation</h2>
                        <p><?php the_field('evaluation'); ?></p>

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
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="section-title">
                        <h2>Application Form </h2>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-md-6">
                    <h2 class="sub-title">School Result</h2>
                    <div class="featured-2-wrapper">
                        <div class="theme-list-3">
                            <ul>
                                <?php
                                if (have_rows('result')) {
                                    while (have_rows('result')) {
                                        the_row();
                                        $file = get_sub_field('result_file');
                                ?>
                                        <li><a target="_blank" href="<?php echo $file['url']; ?>"><?php echo get_sub_field('title') ?></a></li>
                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3d-5">
                    <h2 class="sub-title">School Calender</h2>
                    <div class="featured-2-wrapper">
                        <div class="theme-list-3">
                            <ul>
                                <?php
                                if (have_rows('calender')) {
                                    while (have_rows('calender')) {
                                        the_row();
                                        $file = get_sub_field('calender_file');
                                ?>
                                        <li><a target="_blank" href="<?php echo $file['url']; ?>"><?php echo get_sub_field('title') ?></a></li>
                                <?php }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured-2 Section-->


<?php get_footer();
