<!-- Template Name: Contact Us
 -->
 <?php get_header(); ?>

     <!-- Start Hero Area -->
     <section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-3">Contact Form</h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.html">Home</a> - Contact Us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->
    <!-- Start Page Wrapper-->
    <div class="page-wrapper section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-3d-5" data-aos="fade-up">
                    <div class="main-content">
                        <div class="contact-from-wrapper-2">
                            <h2 class="section-heading">Get In Touch</h2>
                            <?php echo do_shortcode('[metform form_id="248"]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3" data-aos="fade-up">
                    <div class="highlights-section hover_bg text-white p-4">
                        <h4>Don’t Hesitate to contact with us for any kind of information</h4>
                        <ul>
                            <li><i class="fas fa-paper-plane"></i> Koteshwor, Kathmandu</li>
                            <li><i class="fas fa-mobile-alt"></i> 01-4601241 01-4601171</li>
                            <li><i class="fas fa-envelope"></i> angellord2072@gmail.com</li>
                        </ul>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-area section-ptb" data-aos="fade-up"> 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="embeded-map-area">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1050.4327872120568!2d85.34628192307666!3d27.67957407986778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f25591c5f5%3A0xd0ab3680a2cbef10!2sANGEL%20LORD%20ACADEMY%20HIGH%20SCHOOL%2C%20Kathmandu%2044600%2C%20Nepal!5e0!3m2!1sen!2ssg!4v1651216745917!5m2!1sen!2ssg" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>


 <?php get_footer();