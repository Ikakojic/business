<?php
get_header();
?>

<main>

    <?php
    $term = get_queried_object(); //important for cat pic
    $catImg = get_field('taxonomy_image', $term);
    ?>
    <section class="lead-page-section" style="background-image: url(<?php echo $catImg; ?>)">

        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-9 col-md-8 col-lg-6 col-xl-5">
                    <article class="lead-section-content px-4 py-5 animation" data-animation="slide-right">
                        <h1 class="lead-section-title mb-4 text-uppercase">Tag: <?php single_tag_title(); ?></h1>

                        <?php the_archive_description('<p class="lead-section-description">', ' </p>'); ?>

                    </article>
                </div>
            </div>
        </div>

    </section>
    <?php get_template_part('/template-parts/post-loop'); ?>
</main>

<?php
get_footer();
?>
