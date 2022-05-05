<!-- Template Name: ECA-CCA
 -->
<?php get_header(); ?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">CCA / ECA</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - CCA / ECA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!--Start Page -->
<div class="page-wrapper section-ptb-3">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('programs')) {
                while (have_rows('programs')) {
                    the_row();
                    $file = get_sub_field('image', 'ecacca', true);
            ?>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                        <!-- Start Blog Area -->
                        <div class="blog-area">
                            <div class="single_blog mb-5">
                                <div class="big-blog-area border bg-white">
                                    <div class="blog-thumb">
                                        <a><img src="<?php echo $file['url']; ?>" class="img-fluid" alt="event"></a>
                                    </div>
                                    <div class="blog-content p-1">
                                        <div class="blog-text text-dark" >
                                            <h4><?php echo get_sub_field('title') ?></h4>
                                            <p><?php echo get_sub_field('description') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Blog Area -->
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>
<!--End Page -->


<?php get_footer();
