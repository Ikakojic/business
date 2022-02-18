<?php
get_header();
?>
<main>

    <section class="error-page text-center">

        <div class="container">
            <h1 class="text-danger">404</h1>
            <p class="text-uppercase">Oops! Something happened...</p>
            <a href="<?php echo home_url() ?>">Back to homepage.</a>
        </div>
    </section>

</main>

<?php
get_footer();
?>