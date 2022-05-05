<!-- Template Name: House
 -->
<?php get_header(); ?>


<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/Frame.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Houses</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="<?php echo get_site_url(); ?>">Home</a> - Our Houses</p>
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
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                if (have_rows('our_house')) {
                    while (have_rows('our_house')) {
                        the_row();
                        $image = get_sub_field('image');
                ?>
                        <div class="col-lg-3 col-md-6 filter mb-5">
                            <div class="single-featured-5  bg-white text-center">
                                <div class="feature-image">
                                    <img src="<?php echo $image['url']; ?>" height="255px" width="360px" alt="Featured" class="img-flu">
                                </div>
                                <div class="featured-text-and-info border-6">
                                    <div class="feature-content p-4">
                                        <h3><a href="#"><?php echo get_sub_field('title') ?></a></h3>
                                        <p><?php echo apply_filters('the_content', get_sub_field('description')); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Section -->
<?php get_footer();
