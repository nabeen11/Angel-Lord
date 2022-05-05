<?php get_header(); ?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Gallery</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Gallery</p>
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
            <div class="row gx-3">
                <?php
                while (have_posts()) {
                    the_post();
                ?>
                    <div class="col-lg-4 col-sm-6 filter p-1 m-0">
                        <div class="single-gallery">
                            <div class="gallery-image">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'gallery'); ?>" alt="Featured">
                                <div class="gallery-content">
                                    <h3><?php echo get_the_title(); ?></h3>
                                    <div class="gallery-links">
                                        <ul>
                                            <li><a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h3><a style="text-decoration: none;" href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Section -->

<?php get_footer();
