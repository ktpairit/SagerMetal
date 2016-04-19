<?php get_header(); ?>

<div class="main">
    <div class="row">
        <div class="twelve columns mainPic">
            <div class="my-slider" dir="rtl">
                <ul>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/metalFab.png" width="1000"></li>
                    <li><img src="<?php echo get_template_directory_uri (); ?>/img/welder.png" width="1000"></li>
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


        <div class="row customConveyors">
            <div class="twelve columns">
                <h1><?php bloginfo('name'); ?></h1>
                <h5><?php bloginfo('description'); ?></h5>
                <button type="button"><a href="<?php the_permalink(); ?>">Read More</a></button>
            </div>
        </div>

        <div class="row">
            <div class="four columns">
                <?php dynamic_sidebar('left-sager-sidebar'); ?>
            </div>
            <div class="four columns">
                <?php dynamic_sidebar('middle-sager-sidebar'); ?>
            </div>
            <div class="four columns">
                <?php dynamic_sidebar('right-sager-sidebar'); ?>
            </div>
        </div>

        <div class="row">
            <div class="six columns">
                <?php dynamic_sidebar('sager-world-image'); ?>
            </div>
            <div class="six columns">
                <?php dynamic_sidebar('sager-world'); ?>
            </div>
        </div>





        <div class="row">
            <!--Below is the Blog stuff-->
            <div class="twelve columns">
        <!--Begin Loop-->
                <?php
                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post(); ?>

                    <div class="row indexPosts">
                        <div class="four columns index-post-thumbnail">
                        <!--image-->
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('large');
                            } ?>
                        </div>

                        <div class="eight columns postVerbiage">
                        <!--title-->
                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?></a>
                            </h3>
                            <!--date-->
                            <div class="postSubHeader">
                                <p class="postDate">
                                    <?php the_date(); ?>
                                 </p>
                                <p class="postComment">Comments <?php
                                    $args = array(
                                        'post_id' => 1, // use post_id, not post_ID
                                        'count' => true //return only the count
                                    );
                                    $comments = get_comments($args);
                                    echo $comments
                                    ?>
                                </p>
                                <p class="postAuthor">&hearts; <?php the_author(); ?>
                                </p>
                            </div>
                        <!--excerpt-->
                            <?php the_excerpt(); ?>
                        <!--read more-->
                            <div class="viewMore">
                                <a href="<?php the_permalink(); ?>">View Post >></a>
                            </div>
                        </div>
                    </div>

                    <?php } // end while
                } // end if
                ?>
            </div>
        </div>
            <!--End Loop-->
            <!---Sidebar
                        <div class="three columns">
                        </div>
            -->
            <!--Above is the Blog Stuff-->
</div> <!--End of Main section-->

<?php get_footer(); ?>