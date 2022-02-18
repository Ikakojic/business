<footer class="bg-white">\

    <div class='container'>
        <div class="row">
            <div class="col-md-6">
                <?php get_sidebar('footer-1') ?>
            </div>
            <div class="col-md-6">
                <?php get_sidebar('footer-2') ?>
            </div>
        </div>
    </div>


    <div class="container text-center d-sm-flex justify-content-sm-between align-items-sm-center">


        <?php
        $menuLocations = get_nav_menu_locations();
        $socialMenuId = $menuLocations['social'];

        $socialMenuItems = wp_get_nav_menu_items($socialMenuId);

        if ($socialMenuItems) {
            ?>
            <nav class="social mb-4 mb-sm-0 order-sm-last">
                <?php
                foreach ($socialMenuItems as $socialMenuItem) {
                    if ($socialMenuItem->menu_item_parent == 0) {
                        ?>
                        <a href="<?php echo $socialMenuItem->url ?>" class="fab fa-<?php
                        echo strtolower($socialMenuItem->title);
                        ?>"></a>

                        <?php
                    }
                }
                ?>



            </nav>
            <?php
        }
        ?>



        <p class="copyright mb-0">Copyright &copy; <?php echo date('y'); ?> <a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></p>
    </div>
</footer><!--footer end-->






<?php
//include default WP js files
wp_footer();
?>


</body>
</html>

