<?php
?>

<style>
    .settings_response.wpur_alert.wpur_alert_success.wpur_icon.wpur_icon_thumbs-up {
        color: #fff;
        background: #32cd328c;
        padding: 11px;
        border: 1px solid limegreen;
        border-radius: 8px;
    }
    .wpur_general_settings input[type="checkbox"] {
        visibility: hidden;
        display: none;
    }

    .wpur_general_settings *,
    .wpur_general_settings ::after,
    .wpur_general_settings ::before {
        box-sizing: border-box;
    }

    .wpur_general_settings .switch {
        width: 60px;
        height: 30px;
        position: relative;
        display: inline-block;
        margin-right: 30px;
        margin-bottom: 30px;
        margin-top: 20px;
    }

    .wpur_general_settings .slider {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-radius: 30px;
        box-shadow: 0 0 0 2px #777, 0 0 4px #777;
        cursor: pointer;
        border: 4px solid transparent;
        overflow: hidden;
        transition: 0.2s;
    }

    .wpur_general_settings .slider:before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        background-color: #777;
        border-radius: 30px;
        transform: translateX(-29px);
        transition: 0.2s;
    }

    .wpur_general_settings input:checked + .slider:before {
        transform: translateX(29px);
        background-color: limeGreen;
    }

    .wpur_general_settings input:checked + .slider {
        box-shadow: 0 0 0 2px limeGreen, 0 0 8px limeGreen;
    }
    .wpur_general_settings span.wpur_title_text {
        text-align: center;
        display: block;
        margin-top: 35px;
        text-transform: capitalize;
        font-weight: 700;
    }
</style>

<h2>Custom Menu Page</h2>
<p>This is a custom menu page accessible to Editors.</p>


<form action="" method="post" class="wpur_general_settings">
    <div class="settings_response"></div>

    <?php
    $wpur_user_post = get_option("wpur_user_post");
    $checked = get_option('wpur_user_post') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_post" class="switch">
        <input type="checkbox" name="wpur_user_post" id="wpur_user_post" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">post</span>
    </label>
    <?php
    $wpur_user_theme = get_option("wpur_user_theme");
    $checked = get_option('wpur_user_theme') == 1 ? 'checked' : '';
    ?>

    <label for="wpur_user_theme" class="switch">
        <input type="checkbox" name="wpur_user_theme" id="wpur_user_theme" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Theme</span>
    </label>
    <?php
    $wpur_user_users = get_option("wpur_user_users");
    $checked = get_option('wpur_user_users') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_users" class="switch">
        <input type="checkbox" name="wpur_user_users" id="wpur_user_users" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Users</span>
    </label>

    <?php
    $wpur_user_page = get_option("wpur_user_page");
    $checked = get_option('wpur_user_page') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_page" class="switch">
        <input type="checkbox" name="wpur_user_page" id="wpur_user_page" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Page</span>
    </label>

    <?php
    $wpur_user_media = get_option("wpur_user_media");
    $checked = get_option('wpur_user_media') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_media" class="switch">
        <input type="checkbox" name="wpur_user_media" id="wpur_user_media" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Media</span>
    </label>

    <?php
    $wpur_user_customize = get_option("wpur_user_customize");
    $checked = get_option('wpur_user_customize') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_customize" class="switch">
        <input type="checkbox" name="wpur_user_customize" id="wpur_user_customize" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Customize</span>
    </label>

    <?php
    $wpur_user_widgets = get_option("wpur_user_widgets");
    $checked = get_option('wpur_user_widgets') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_widgets" class="switch">
        <input type="checkbox" name="wpur_user_widgets" id="wpur_user_widgets" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Widgets</span>
    </label>

    <?php
    $wpur_user_menus = get_option("wpur_user_menus");
    $checked = get_option('wpur_user_menus') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_menus" class="switch">
        <input type="checkbox" name="wpur_user_menus" id="wpur_user_menus" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Menus</span>
    </label>

    <?php
    $wpur_user_theme_file_editor = get_option("wpur_user_theme_file_editor");
    $checked = get_option('wpur_user_theme_file_editor') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_theme_file_editor" class="switch">
        <input type="checkbox" name="wpur_user_theme_file_editor" id="wpur_user_theme_file_editor" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Theme file editor</span>
    </label>

    <?php
    $wpur_user_plugin = get_option("wpur_user_plugin");
    $checked = get_option('wpur_user_plugin') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_plugin" class="switch">
        <input type="checkbox" name="wpur_user_plugin" id="wpur_user_plugin" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Plugin</span>
    </label>

    </label>

    <?php
    $wpur_user_setting = get_option("wpur_user_setting");
    $checked = get_option('wpur_user_setting') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_setting" class="switch">
        <input type="checkbox" name="wpur_user_setting" id="wpur_user_setting" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Setting</span>
    </label>

    <div class="wpur_text_center">
        <button type="submit"
                class="button button-primary save_gen"><?php echo esc_html_x("Save Settings", "admin", "wpur") ?></button>
    </div>
</form>

