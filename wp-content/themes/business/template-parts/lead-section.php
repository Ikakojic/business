<?php
if (is_home() && get_option('page_for_posts')) {
    $leadSubtitle = get_field('lead_subtitle', get_option('page_for_posts'));
    $leadDesc = get_field('lead_description', get_option('page_for_posts'));
    $leadImg = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
} else {
    $leadSubtitle = get_field('lead_subtitle');
    $leadDesc = get_field('lead_description');
    $leadImg = get_the_post_thumbnail_url(get_the_ID(), 'full');
}
?>
<section class="lead-page-section" style="background-image: url(<?php echo $leadImg; ?>)">

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-9 col-md-8 col-lg-6 col-xl-5">
                <article class="lead-section-content px-4 py-5 animation" data-animation="slide-right">
                    <h1 class="lead-section-title mb-4"><?php echo $leadSubtitle; ?></h1>
                    <p class="lead-section-description">
                        <?php echo $leadDesc; ?>
                    </p>

                    <?php
                    if (is_front_page()) {
                        ?>
                        <a href="<?php the_field('lead_section_link') ?>"class="text-uppercase btn btn-primary rounded-pill px-5 py-3"><?php the_field('lead_section_link_text');?> </a>

                        <?php
                    }
                    ?>
                </article>
            </div>
        </div>
    </div>

</section>