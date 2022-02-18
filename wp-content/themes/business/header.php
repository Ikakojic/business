<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="<?php bloginfo('language'); ?>">
    <head>
        <title>
            <?php
            bloginfo('name');
            wp_title('|', true, 'left');
            ?>


        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Vladan Dzulovic">
        <meta name="description" content="Lawyer is a specialized commercial law firm based in Belgrade, Serbia, firmly committed to providing advice at the highest level and achieving lasting results for our clients.">
        <meta name="keywords" content="Lawyer, law, Belgrade, company, clients">


        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/frontend/apple-icon-144x144.png">


        <!--Android compatibility-->

        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="<?php bloginfo('name'); ?>">
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/frontend/android-icon-192x192.png">



        <?php
        //include default wordpress style
        wp_head();
        ?>



    </head>
    <body
        <?php body_class(); ?>>


        <header class="fixed-top bg-white py-2 py-xl-4">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light ">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        ?>
                        <a class="navbar-brand" href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/frontend/img/logo.png" alt=""/>
                        </a>
                        <?php
                    }
                    ?>

                    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="main-menu">


                        <?php
//                           wp_nav_menu(array(
//                               'menu_location' => 'main-menu',
//                               'menu_class'=>'navbar-nav ml-auto',
//                               'container'=>'',
//                               
//                               
//                               
//                           ));
                        ?>

                        <?php
                        $menuLocation = get_nav_menu_locations();
                        $mainMenuId = $menuLocation['main-menu'];
                        $topMenuItems = wp_get_nav_menu_items($mainMenuId);
                        if ($topMenuItems) {
                            ?>
                            <ul class="navbar-nav ml-auto">
                                <?php
                                foreach ($topMenuItems as $topMenuItem) {


                                    //active class element
                                    $active_class = '';
                                    if ($topMenuItem->url == get_permalink()) {
                                        $active_class = 'active';
                                    }

                                    //top lvl menu

                                    if ($topMenuItem->menu_item_parent == 0) {
                                        ?>
                                        <li class="nav-item ">
                                            <a class="nav-link <?php echo $active_class; ?>" href="<?php echo $topMenuItem->url ?>"><?php echo $topMenuItem->title ?></a>
                                        </li>

                                        <?php
                                    }
                                }
                                ?>

                            </ul>
                            <?php
                        }
                        ?>



                    </div>
                </nav>
            </div><!--.container end-->
        </header><!--header end-->

