<?php
get_header();
?>


<main>
    <?php
    get_template_part('/template-parts/lead-section');

    get_template_part('/template-parts/homepage-services');

    get_template_part('/template-parts/homepage-team-members');

    get_template_part('/template-parts/info-section');
    ?>


</main>


<?php
get_footer();
?>