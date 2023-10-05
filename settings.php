<?php
?>
<h2>Custom Menu Page</h2>
<p>This is a custom menu page accessible to Editors.</p>


<form action="" method="post" class="ptsc_general_settings">
    <div class="settings_response"></div>
    <?php
    $am_user_post = get_option("am_user_post");
    $checked = get_option('am_user_post') == 1 ? 'checked' : '';
    ?>
    <input type="checkbox" name="am_user_post" id="am_user_post" <?php echo $checked ?> value="1">
    <label for="am_user_post">
        post
    </label>

    <div class="ptsc_text_center">
        <button type="submit"
                class="button button-primary save_gen"><?php echo esc_html_x("Save Settings", "admin", "ptsc") ?></button>
    </div>
</form>
