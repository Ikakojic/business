
<?php
$address = get_option('business_address');
$phone = get_option('business_phone');
$mobile = get_option('business_mobile');
$email = get_option('business_email');
?>

<?php
if (!empty($address)) {
    ?>
    <p class="info-address animation" data-animation="slide-top" data-delay="0s">
        <span class="fas fa-map-marker-alt"></span>
    <?php echo $address; ?>
    </p>
        <?php
    }
    ?>

<?php
if (!empty($phone)) {
    ?>
    <p class="info-phone animation" data-animation="slide-top" data-delay="0.2s">
        <span class="fas fa-phone-alt"></span>
        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
    </p>
    <?php
}
?>


<?php
if (!empty($phone)) {
    ?>
    <p class="info-email animation" data-animation="slide-top" data-delay="0.4s">
        <span class="far fa-envelope"></span>
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
    </p>
    <?php
}
?>


