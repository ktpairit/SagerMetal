<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,600,400|Codystar:400,300|Londrina+Outline' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <!--Beginning of Header-->
        <header class="row">
            <div class="two columns">
                <a href="http://www.kpvisualdesigns.com/sager/"><img src="<?php echo get_template_directory_uri (); ?>/img/SagerLogo96.png" width="170" class="logo"></a>
            </div>
            <!-- Add Menu Here -->
            <div class="ten columns frontPageHeader">
                <?php dynamic_sidebar('phone-number-sidebar'); ?>
                <?php get_search_form(); ?>
                <?php wp_nav_menu(array(
                    'menu' => 'Main Menu',
                    'sort_column' => 'menu_order',
                    'container_class' => 'blank-menu-header'
                ));?>
            </div>


<!----------
            <div class="row headerDiv">
                <div class="twelve columns">
                    <div class="headerImg">
                        <img src="<?php
                        // header_image(); ?>" height="<?php
                        // echo get_custom_header()->height; ?>" width="<?php
                        // echo get_custom_header()->width; ?>" alt="" />
                    </div>
                    <div class="headerVerbiage">
                        <h1><a href="<?php
                        // bloginfo('url'); ?>"><?php
                        // bloginfo('name'); ?></a></h1>
                        <h3><?php
                        // bloginfo('description'); ?></h3>
                    </div>
                </div>
            </div>
-->
        </header>
        <!-- End of Header - Begin Section Content-->