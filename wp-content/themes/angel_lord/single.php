<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Angel_Lord
 */

get_header();
the_post();
?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
	<div class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-hrader text-white text-center">
						<h1 class="display-3"><?php echo get_the_title(); ?></h1>
						<div class="page-breadcrumb">
							<p><a class="text-white" href="index.html">Home</a> -<?php echo get_the_title(); ?></p>
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
			<div class="col-lg-8 mb-3d-5" data-aos="fade-up" data-aos-delay="400">
				<!-- Start Blog Details -->
				<div class="details-wrapper">
					<div class="details-image mb-4">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'event-single', true); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid">
					</div>
					<div class="details-title">
						<h2><?php echo get_the_title(); ?></h2>
					</div>
					<div class="details-meta">
						<div class="single-meta">
							<p><i class="fas fa-calendar-alt"></i> <?php the_field('date'); ?></p>
						</div>
						<div class="single-meta">
							<p><i class="fa fa-clock"></i> <?php the_field('start-time'); ?> - <?php the_field('end-time'); ?></p>
						</div>
						<div class="single-meta">
							<p><i class="fas fa-map-marker-alt"></i> <?php the_field('location'); ?> </p>
						</div>
					</div>
					<div class="details-text pt-4">
						<p><?php echo apply_filters('the_content', get_the_content()); ?></p>
					</div>
					<div class="tags-and-share">

						<div class="share-option">
							<p>Share: </p>
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-behance"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- End Blog Details -->
			</div>
			<div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
				<!-- Start Sidebar -->
				<div class="sidebar-wrapper">

					<div class="single-widget">
						<div class="latest-widget border">
							<h4>Latest Notice</h4>
							<?php
							$args = array('post_type' => 'notice', 'posts_per_page' => 5);
							$the_query = new WP_Query($args);
							if ($the_query->have_posts()) {
							?>
								<?php
								while ($the_query->have_posts()) {
									$the_query->the_post();
								?>
									<div class="single-latest">
										<div class="latest-image">
											<a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'notice'); ?>" alt="<?php echo get_the_title(); ?>"></a>
										</div>
										<div class="latest-content">
											<h6><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h6>
											<div class="latest-meta">
												<span><?php echo get_the_date(); ?></span>
											</div>
										</div>
									</div>
							<?php }
							} ?>
						</div>
					</div>
					<div class="single-widget border p-4">
						<div class="category-widget">
							<h4>Calender</h4>
							<div class="category-list">
								<?php echo do_shortcode('[hamropatro-calendar-medium]'); ?>
							</div>
						</div>
					</div>
				</div>
				<!-- End Sidebar -->
			</div>
		</div>
	</div>
</div>
<!--End Page -->

<?php
get_footer();
