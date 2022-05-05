<?php get_header();
$terms = get_terms(array('taxonomy' => 'teamlevel', 'orderby' => 'term_order', 'hide_empty' => false));
?>
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Our Teachers</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Our Teachers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<!-- Start Our Team Carousel -->
<section class="team-section section-ptb" data-aos="fade-up">
    <div class="our-team-area show_navigation">
        <?php
        foreach ($terms as $term) {
        ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mt-5 mb-4">
                            <h4>Our Team</h4>
                            <h2><?php echo $term->name; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="our-team-carousel-3 owl-carousel">
                            <?php
                            $args = array(
                                'post_type' => 'team', 'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'teamlevel',
                                        'field' => 'slug',
                                        'terms' => $term->slug
                                    )
                                )
                            );
                            $the_query = new WP_Query($args);
                            ?>
                            <?php while ($the_query->have_posts()) {
                                $the_query->the_post();  ?>
                                <div class="single-team">
                                    <div class="member-image">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'team', true); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
                                    </div>
                                    <div class="member-info default_bg">
                                        <div class="designation">
                                            <h6><?php echo get_the_title(); ?></h6>
                                            <span><?php echo wp_trim_words(get_the_content(), 3); ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
<!-- End Our Team Carousel -->



<?php get_footer();
