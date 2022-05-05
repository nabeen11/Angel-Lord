<!-- Template Name: Facility
 -->
<?php get_header(); ?>

<!-- Start Hero Area -->
<section class="hero-section height-470 bg_dark_9" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'page-banner'); ?>)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3"><?php echo get_the_title(); ?></h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Teacher</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Author Intro -->
<section class="intro-section section-ptb bg_dark_9" data-aos="fade-up">
    <div class="intro-area">
        <div class="container">
            <?php
            if (have_rows('facilities')) {
                while (have_rows('facilities')) {
                    the_row();
                    $size = 'club-single';
                    $image = get_sub_field('image', $size);
            ?>
                    <div class="row">
                        <div class="col-lg-5 mb-3d-5 mb-5">
                            <div class="half_columnn_image">
                                <img src="<?php echo $image['url']; ?>" alt="author image">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="half_column_content">
                                <h3><?php echo get_sub_field('title') ?></h3>
                                <p><?php echo apply_filters('the_content', get_sub_field('description')); ?></p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>
<!-- End Author Intro -->

<?php get_footer();
