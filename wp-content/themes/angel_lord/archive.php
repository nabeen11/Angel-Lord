<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Angel_Lord
 */

get_header();
$cat_title = single_cat_title('', false);

?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
	<div class="hero-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page-hrader text-white text-center">
						<h1 class="display-3"><?php echo $cat_title; ?></h1>
						<div class="page-breadcrumb">
							<p><a class="text-white" href="index.html">Home</a> - <?php echo $cat_title; ?></p>
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
			<div class="col-lg-8 mb-3d-5">
				<div class="row">
					<?php
					while (have_posts()) {
						the_post();
					?>
						<div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
							<!-- Start Blog Area -->
							<div class="blog-area">
								<div class="single_blog mb-5">
									<div class="big-blog-area border bg-white">
										<div class="blog-thumb">
											<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'archive-event'); ?>" alt="<?php echo get_the_title(); ?>" class="img-fluid"></a>
										</div>
										<div class="blog-content p-4">
											<div class="blog-text">
												<h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
												<p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
												<a href="<?php the_permalink(); ?>">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Blog Area -->
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
				<!-- Start Sidebar -->
				<div class="sidebar-wrapper">
					<div class="single-widget">
						<div class="latest-widget border">
							<h4>Our Notice</h4>
							<div class="single-latest">
								<div class="latest-image">
									<a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/blog_01.jpg" alt="blog"></a>
								</div>
								<div class="latest-content">
									<h6><a href="#">Building Diverse Design Was Teams Innovation.</a></h6>
									<div class="latest-meta">
										<span>05 Jan 2019</span>
									</div>
								</div>
							</div>
							<div class="single-latest">
								<div class="latest-image">
									<a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/blog_02.jpg" alt="blog"></a>
								</div>
								<div class="latest-content">
									<h6><a href="#">Building Diverse Design Was Teams Innovation.</a></h6>
									<div class="latest-meta">
										<span>05 Jan 2019</span>
									</div>
								</div>
							</div>
							<div class="single-latest">
								<div class="latest-image">
									<a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/blog_03.jpg" alt="blog"></a>
								</div>
								<div class="latest-content">
									<h6><a href="#">Building Diverse Design Was Teams Innovation.</a></h6>
									<div class="latest-meta">
										<span>05 Jan 2019</span>
									</div>
								</div>
							</div>
							<div class="single-latest">
								<div class="latest-image">
									<a href="#"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/blog_05.jpg" alt="blog"></a>
								</div>
								<div class="latest-content">
									<h6><a href="#">Building Diverse Design Was Teams Innovation.</a></h6>
									<div class="latest-meta">
										<span>05 Jan 2019</span>
									</div>
								</div>
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
