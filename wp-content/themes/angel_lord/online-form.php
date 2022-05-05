<!-- Template Name: Online Form
 -->
<?php get_header(); ?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Admission Form</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Apply</p>
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
        <div class="row download-file">
            <?php
            $file = get_field('file');
            ?>
            <h5><a target="_blank" href="<?php echo $file['url']; ?>">Download Form</a></h5>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <?php echo do_shortcode('[metform form_id="133"]'); ?>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->



<?php get_footer();
