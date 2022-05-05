<?php get_header();
the_post(); ?>

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
            <div class="row">
                <div class="col-lg-5 mb-3d-5">
                    <div class="half_columnn_image">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'club-single'); ?>" alt="author image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="half_column_content">
                        <h3><?php echo get_the_title(); ?></h3>
                        <p><?php echo get_the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Author Intro -->
<section class="timeline-section section-ptb-3" data-aos="fade-up">
    <div class="timeline-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <div class="page-section-title">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row gx-2">
                <?php
                $images = get_field('gallery_images');
                if ($images) : ?>

                    <?php foreach ($images as $image) : ?>
                        <a class="p-1" href="<?php echo esc_url($image['url']); ?>" data-fancybox="group">
                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" height="260" width="260" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </a>
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>



<?php get_footer();
