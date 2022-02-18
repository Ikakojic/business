<?php

function business_options_page() {

    add_menu_page('Options page',
            'Business options',
            'administrator',
            'options_page',
            'business_contact_data',
            'dashicons-phone',
            19
    );
}

add_action('admin_menu', 'business_options_page');

function business_contact_settings() {
    register_setting('business_contact_data', 'business_contact_title');
    register_setting('business_contact_data', 'business_address');
    register_setting('business_contact_data', 'business_phone');
    register_setting('business_contact_data', 'business_mobile');
    register_setting('business_contact_data', 'business_email');
}

add_action('init', 'business_contact_settings');

function business_contact_data() {
    ?>
    <h1>Contact data</h1>
    <form method="POST" action="options.php">
        <?php
        settings_fields('business_contact_data');
        do_settings_sections('business_contact_data');
        ?>

        <table class='form-table'>
            <tr>
                <th>Info section title</th>
                <td>
                    <input type="text" name="business_contact_title" value="<?php echo esc_attr(get_option('business_contact_title')) ?>">

                </td>
            </tr>
            <tr>
                <th>Address</th>
                <td>
                    <input type="text" name="business_address" value="<?php echo esc_attr(get_option('business_address')) ?>">

                </td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>
                    <input type="text" name="business_phone" value="<?php echo esc_attr(get_option('business_phone')) ?>">

                </td>
            </tr>
            <tr>
                <th>Mobile phone</th>
                <td>
                    <input type="text" name="business_mobile" value="<?php echo esc_attr(get_option('business_mobile')) ?>">

                </td>
            </tr>
            <tr>
                <th>Email</th>
                <td>
                    <input type="text" name="business_email" value="<?php echo esc_attr(get_option('business_email')) ?>">

                </td>
            </tr>
        </table>
        
        <?php submit_button();?>


    </form>
    <?php
}
