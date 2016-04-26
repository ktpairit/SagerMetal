<?php

/*
Template Name: Metal Fabrication
*/
?>


<?php get_header(); ?>

<div class="main">
    <div class="row">
        <div class="twelve columns mainPic">
            <div class="my-slider" dir="rtl">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/mc1.png" width="1000"></li>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/tc3.png" width="1000"></li>
                    <!--<li></li>-->
                </ul>
                            <!-- Third we include jQuery -->
            <script src="//code.jquery.com/jquery-latest.min.js"></script>

            <!-- Speed up Slider
            <script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js"></script>
            --->

            <!-- Fourth we include the Unslider.js -->
            <script src="<?php echo get_template_directory_uri (); ?>/js/unslider.js"></script>

            </div>
        </div>
    </div>


        <div class="row customConveyorsPage">
            <div class="twelve columns">
                <?php dynamic_sidebar('metal-fabrication-sidebar'); ?>
                <!-- <button type="button"><a href="<?php // the_permalink(); ?>">Read More</a></button> -->
            </div>
        </div>
</div>


 <?php get_footer(); ?>




