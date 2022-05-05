<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Angel_Lord
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wptime-plugin-preloader"></div>
    <header>
        <div class="header_top_area my-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_top d-flex justify-content-between">
                            <div class="site_logo">
                                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="logo" class="img-fluid logo"></a>
                            </div>
                            <div class="site_info d-flex justify-content-between">
                                <div class="single_info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/location.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Location</h6>
                                        <p>Koteshwor, Kathmandu</p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/phone.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Phone</h6>
                                        <p>01-4601241 - 4601171</p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <button class="special-button" onclick="window.location.href = '<?php echo get_permalink(get_page_by_path('online-form')); ?>';">Apply Now <i class="fa fa-angle-right"></i> <span class="button_icon"><i class="far fa-file-alt"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg_dark_mobile" id="sticky">
            <div class="container navsize">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu default_bg">
                            <nav class="navbar navbar-expand-lg">
                                <div class="mobile_site_logo d-none">
                                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/mobile-logo.png" alt="logo" class="img-fluid mobile"></a>
                                </div>
                                <div>
                                    <?php
                                    echo do_shortcode('[hfe_template id="204"]'); ?>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
        </div>
    </header>