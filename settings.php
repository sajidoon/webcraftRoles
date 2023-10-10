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
        display: none;
        text-transform: capitalize;
        font-weight: 600;
        position: absolute;
        top: -31px;
        background: #000;
        color: #fff;
        padding: 2px 9px;
        width: 105px;
        border-radius: 6px;
        font-size: 10px;
        left: -23px;
    }

    .wpur_general_settings label.switch:hover span.wpur_title_text {
        display: block;
    }

    .wpur_general_settings span.wpur_title_text:after {
        border-left: solid transparent 6px;
        border-right: solid transparent 6px;
        border-top: solid #000 6px;
        bottom: -6px;
        content: " ";
        height: 0;
        left: 50%;
        margin-left: -5px;
        position: absolute;
        width: 0;
    }
    .wpur_general_settings .wpur_post_other_option.post_option_active {
        cursor: not-allowed;
    }
    .wpur_general_settings .wpur_post_other_option.post_option_active .switch {
        pointer-events: none;
        filter: grayscale(1);
    }

</style>

<h2>Custom Menu Page</h2>
<p>This is a custom menu page accessible to Editors.</p>


<form action="" method="post" class="wpur_general_settings">
    <div class="settings_response"></div>

    <?php
    $wpur_user_post = get_option("wpur_user_post") == 1 ? 1 : 0;
    $checked = get_option('wpur_user_post') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_post" class="switch">
        <input type="checkbox" name="wpur_user_post" id="wpur_user_post" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">post</span>
    </label>
    <input type="hidden" class="wpur_post_user_option" value="<?php echo $wpur_user_post ?>">
    <div class="wpur_post_other_option">
        <?php
        $checked = get_option('wpur_user_post_edit') == 1 ? 'checked' : '';
        ?>
        <label for="wpur_user_post_edit" class="switch">
            <input type="checkbox" name="wpur_user_post_edit" id="wpur_user_post_edit" <?php echo $checked ?> value="1">
            <span class="slider"></span>
            <span class="wpur_title_text">Edit Post</span>
        </label>
        <?php
        $checked = get_option('wpur_user_post_delete') == 1 ? 'checked' : '';
        ?>
        <label for="wpur_user_post_delete" class="switch">
            <input type="checkbox" name="wpur_user_post_delete" id="wpur_user_post_delete" <?php echo $checked ?>
                   value="1">
            <span class="slider"></span>
            <span class="wpur_title_text">Delete Post</span>
        </label>
        <?php
        $checked = get_option('wpur_user_post_edit_others') == 1 ? 'checked' : '';
        ?>
        <label for="wpur_user_post_edit_others" class="switch">
            <input type="checkbox" name="wpur_user_post_edit_others"
                   id="wpur_user_post_edit_others" <?php echo $checked ?> value="1">
            <span class="slider"></span>
            <span class="wpur_title_text">Edit other post</span>
        </label>
        <?php
        $checked = get_option('wpur_user_post_delete_others') == 1 ? 'checked' : '';
        ?>
        <label for="wpur_user_post_delete_others" class="switch">
            <input type="checkbox" name="wpur_user_post_delete_others"
                   id="wpur_user_post_delete_others" <?php echo $checked ?> value="1">
            <span class="slider"></span>
            <span class="wpur_title_text">Delete other post</span>
        </label>
    </div>
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
    $wpur_user_page_edit = get_option("wpur_user_page_edit");
    $checked = get_option('wpur_user_page_edit') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_page_edit" class="switch">
        <input type="checkbox" name="wpur_user_page_edit" id="wpur_user_page_edit" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Edit Page</span>
    </label>
    <?php
    $wpur_user_page_delete = get_option("wpur_user_page_delete");
    $checked = get_option('wpur_user_page_delete') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_page_delete" class="switch">
        <input type="checkbox" name="wpur_user_page_delete" id="wpur_user_page_delete" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Delete Page</span>
    </label>
    <?php
    $wpur_user_page_edit_other = get_option("wpur_user_page_edit_other");
    $checked = get_option('wpur_user_page_edit_other') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_page_edit_other" class="switch">
        <input type="checkbox" name="wpur_user_page_edit_other" id="wpur_user_page_edit_other" <?php echo $checked ?>
               value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">edit Other Page</span>
    </label>
    <?php
    $wpur_user_page_delete_other = get_option("wpur_user_page_delete_other");
    $checked = get_option('wpur_user_page_delete_other') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_page_delete_other" class="switch">
        <input type="checkbox" name="wpur_user_page_delete_other"
               id="wpur_user_page_delete_other" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Delete other Page</span>
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
    $wpur_user_media = get_option("wpur_user_media");
    $checked = get_option('wpur_user_media') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_media" class="switch">
        <input type="checkbox" name="wpur_user_media" id="wpur_user_media" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text">Media</span>
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


<script>


    jQuery(document).ready(function () {
        var $post_checked = jQuery(".wpur_post_user_option").val();
        if ($post_checked == 1) {
            jQuery(document).find('.wpur_post_other_option').removeClass('post_option_active');
        }else {
            jQuery(document).find('.wpur_post_other_option').addClass('post_option_active');
        }
        jQuery('#wpur_user_post').change( function(){
            jQuery(document).find('.wpur_post_other_option').toggleClass('post_option_active');
        })
    });
</script>

