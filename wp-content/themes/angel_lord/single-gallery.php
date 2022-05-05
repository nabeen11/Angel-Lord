<?php get_header();
the_post(); ?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3"><?php echo get_the_title(); ?></h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - <?php echo get_the_title(); ?></p>
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
            <div class="row gx-2">
                <?php
                $images = get_field('gallery_images');

                if ($images) : ?>

                    <?php foreach ($images as $image) : ?>
                        <a class="p-1" href="<?php echo esc_url($image['url']);  ?>" data-fancybox="group">
                            <p><?php
                                $filetype = pathinfo($image['filename'], PATHINFO_EXTENSION);
                                if ($filetype == 'mp4') { ?>
                                    <iframe width="260" height="260" src="<?php echo esc_url($image['url']);  ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <?php } else { ?>
                                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" height="260" width="260" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php }
                                ?>
                            </p>

                        </a>
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Section -->

<?php get_footer();
