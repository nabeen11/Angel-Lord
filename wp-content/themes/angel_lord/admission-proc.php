<!-- Template Name: Admission Procedure
 -->
<?php get_header();
the_post();
$image = get_field('scholarship_image');
?>
<!-- Start Hero Area -->
<section class="hero-section height-470 bg_dark_9" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3"><?php echo get_the_title(); ?></h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Admission</p>
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
            <div class="row">
                <div class="col-lg-5 mb-3d-5">
                    <div class="half_columnn_image">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'admission-proc'); ?>" alt="author image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="half_column_content">
                        <h3><?php echo get_the_title(); ?></h3>
                        <p><?php echo get_the_content(); ?></p>
                        <div class="secondary-content">
                            <h6>Required Documents</h6>
                            <div class="theme-list-4">
                                <ul>
                                    <?php
                                    if (have_rows('required')) {
                                        while (have_rows('required')) {
                                            the_row();
                                    ?>
                                            <li><?php echo get_sub_field('title') ?></li>
                                    <?php }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="post-meta-info">
                            <ul>
                                <li> <i class="fa fa-mobile-alt"></i> 01-4601241, 01-4601171</li>
                                <li><i class="fas fa-map-marker-alt"></i> Koteshwor, Kathmandu</li>
                                <li><i class="fas fa-envelope"></i> angellord2072@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Author Intro -->


<?php get_footer();
