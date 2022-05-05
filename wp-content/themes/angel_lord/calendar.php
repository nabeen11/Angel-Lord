<!-- Template Name: Calendar
 -->
 <?php get_header(); ?>

<!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/about_us.png)">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-3">Calendar</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="index.html">Home</a> - Calendar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->
<div class="result-wrapper section-ptb-3">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-center">
                <div class="results-area">
                    <h2>Angel lord Calendar</h2>
                    <div class="result-table table-responsive mt-5 table-bordered">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Year</th>
                                    <th>Calendar File</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (have_rows('angel_calendar')) {
                                    while (have_rows('angel_calendar')) {
                                        the_row();
                                        $file = get_sub_field('file');
                                ?>
                                        <tr>
                                            <td><?php echo get_sub_field('title') ?></td>
                                            <td><a target="_blank" href="<?php echo $file['url']; ?>">Download</a></td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Page -->


<?php get_footer();
