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

    .wpur_main_setting input[type="checkbox"] {
        visibility: hidden;
        display: none;
    }

    .wpur_main_setting *,
    .wpur_main_setting ::after,
    .wpur_main_setting ::before {
        box-sizing: border-box;
    }

    .wpur_main_setting .switch {
        width: 60px;
        height: 30px;
        position: relative;
        display: inline-block;
        margin-right: 30px;
        margin-bottom: 30px;
        margin-top: 20px;
    }

    .wpur_main_setting .slider {
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

    .wpur_main_setting .slider:before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        background-color: #777;
        border-radius: 30px;
        transform: translateX(-29px);
        transition: 0.2s;
    }

    .wpur_main_setting input:checked + .slider:before {
        transform: translateX(29px);
        background-color: limeGreen;
    }

    .wpur_main_setting input:checked + .slider {
        box-shadow: 0 0 0 2px limeGreen, 0 0 8px limeGreen;
    }

    .wpur_main_setting span.wpur_title_text {
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

    .wpur_main_setting label.switch:hover span.wpur_title_text {
        display: block;
    }

    .wpur_main_setting span.wpur_title_text:after {
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
    .wpur_main_setting .wpur_post_other_option.post_option_active {
        cursor: not-allowed;
    }
    .wpur_main_setting .wpur_post_other_option.post_option_active .switch {
        pointer-events: none;
        filter: grayscale(1);
    }

    .wpur_main_setting .wpur_page_other_option.page_option_active {
        cursor: not-allowed;
    }
    .wpur_main_setting .wpur_page_other_option.page_option_active .switch {
        pointer-events: none;
        filter: grayscale(1);
    }



    .wpur_main_setting .wpur_post_other_option_seo.post_option_active {
        cursor: not-allowed;
    }
    .wpur_main_setting .wpur_post_other_option_seo.post_option_active .switch {
        pointer-events: none;
        filter: grayscale(1);
    }

    .wpur_main_setting .wpur_page_other_option_seo.page_option_active {
        cursor: not-allowed;
    }
    .wpur_main_setting .wpur_page_other_option_seo.page_option_active .switch {
        pointer-events: none;
        filter: grayscale(1);
    }


    .wpur_row_main{
        display: flex;
    }
    .wpur_row_main .wpur_col {
        display: inline-block;
        width: 50%;
    }

</style>

<h2>Custom Menu Page</h2>
<p>This is a custom menu page accessible to Editors.</p>

<div class="wpur_main_setting">
<form action="" method="post" class="wpur_general_settings">
    <div class="settings_response"></div>

    <h1>Admin</h1>

    <div class="wpur_row_main">
        <div class="wpur_col">
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
        </div>
        <div class="wpur_col">
            <?php
            $wpur_user_page = get_option("wpur_user_page") == 1 ? 1 : 0;;
            $checked = get_option('wpur_user_page') == 1 ? 'checked' : '';
            ?>
            <label for="wpur_user_page" class="switch">
                <input type="checkbox" name="wpur_user_page" id="wpur_user_page" <?php echo $checked ?> value="1">
                <span class="slider"></span>
                <span class="wpur_title_text">Page</span>
            </label>
            <input type="hidden" class="wpur_page_user_option" value="<?php echo $wpur_user_page ?>">
            <div class="wpur_page_other_option">
                <?php
                $checked = get_option('wpur_user_page_edit') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_page_edit" class="switch">
                    <input type="checkbox" name="wpur_user_page_edit" id="wpur_user_page_edit" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text">Edit Page</span>
                </label>
                <?php
                $checked = get_option('wpur_user_page_delete') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_page_delete" class="switch">
                    <input type="checkbox" name="wpur_user_page_delete" id="wpur_user_page_delete" <?php echo $checked ?>
                           value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text">Delete Post</span>
                </label>
                <?php
                $checked = get_option('wpur_user_page_edit_others') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_page_edit_others" class="switch">
                    <input type="checkbox" name="wpur_user_page_edit_others"
                           id="wpur_user_page_edit_others" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text">Edit other page</span>
                </label>
                <?php
                $checked = get_option('wpur_user_page_delete_others') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_page_delete_others" class="switch">
                    <input type="checkbox" name="wpur_user_page_delete_others"
                           id="wpur_user_page_delete_others" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text">Delete other post</span>
                </label>
            </div>
        </div>
    </div>
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



<form action="" method="post" class="wpur_general_settings_seo">
    <div class="settings_response_seo"></div>

    <h1>Seo</h1>

    <div class="wpur_row_main_seo">
        <div class="wpur_col_seo">
            <?php
            $wpur_user_post_seo = get_option("wpur_user_post_seo") == 1 ? 1 : 0;
            $checked = get_option('wpur_user_post_seo') == 1 ? 'checked' : '';
            ?>
            <label for="wpur_user_post_seo" class="switch">
                <input type="checkbox" name="wpur_user_post_seo" id="wpur_user_post_seo" <?php echo $checked ?> value="1">
                <span class="slider"></span>
                <span class="wpur_title_text_seo">post</span>
            </label>
            <input type="hidden" class="wpur_post_user_option_seo" value="<?php echo $wpur_user_post_seo ?>">
            <div class="wpur_post_other_option_seo">
                <?php
                $checked = get_option('wpur_user_post_edit_seo') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_post_edit_seo" class="switch">
                    <input type="checkbox" name="wpur_user_post_edit_seo" id="wpur_user_post_edit_seo" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text_seo">Edit Post</span>
                </label>
                <?php
                $checked = get_option('wpur_user_post_delete_seo') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_post_delete_seo" class="switch">
                    <input type="checkbox" name="wpur_user_post_delete_seo" id="wpur_user_post_delete_seo" <?php echo $checked ?>
                           value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text_seo">Delete Post</span>
                </label>
                <?php
                $checked = get_option('wpur_user_post_edit_others_seo') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_post_edit_others_seo" class="switch">
                    <input type="checkbox" name="wpur_user_post_edit_others_seo"
                           id="wpur_user_post_edit_others_seo" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text_seo">Edit other post</span>
                </label>
                <?php
                $checked = get_option('wpur_user_post_delete_others_seo') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_post_delete_others_seo" class="switch">
                    <input type="checkbox" name="wpur_user_post_delete_others_seo"
                           id="wpur_user_post_delete_others_seo" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text_seo">Delete other post</span>
                </label>
            </div>
        </div>
        <div class="wpur_col">
            <?php
            $wpur_user_page_seo = get_option("wpur_user_page_seo") == 1 ? 1 : 0;;
            $checked = get_option('wpur_user_page_seo') == 1 ? 'checked' : '';
            ?>
            <label for="wpur_user_page_seo" class="switch">
                <input type="checkbox" name="wpur_user_page_seo" id="wpur_user_page_seo" <?php echo $checked ?> value="1">
                <span class="slider"></span>
                <span class="wpur_title_text_seo">Page</span>
            </label>
            <input type="hidden" class="wpur_page_user_option_seo" value="<?php echo $wpur_user_page_seo ?>">
            <div class="wpur_page_other_option_seo">
                <?php
                $checked = get_option('wpur_user_page_edit_seo') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_page_edit_seo" class="switch">
                    <input type="checkbox" name="wpur_user_page_edit_seo" id="wpur_user_page_edit_seo" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text_seo">Edit Page</span>
                </label>
                <?php
                $checked = get_option('wpur_user_page_delete_seo') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_page_delete_seo" class="switch">
                    <input type="checkbox" name="wpur_user_page_delete_seo" id="wpur_user_page_delete_seo" <?php echo $checked ?>
                           value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text_seo">Delete Post</span>
                </label>
                <?php
                $checked = get_option('wpur_user_page_edit_others_seo') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_page_edit_others_seo" class="switch">
                    <input type="checkbox" name="wpur_user_page_edit_others_seo"
                           id="wpur_user_page_edit_others_seo" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text_seo">Edit other page</span>
                </label>
                <?php
                $checked = get_option('wpur_user_page_delete_others_seo') == 1 ? 'checked' : '';
                ?>
                <label for="wpur_user_page_delete_others_seo" class="switch">
                    <input type="checkbox" name="wpur_user_page_delete_others_seo"
                           id="wpur_user_page_delete_others_seo" <?php echo $checked ?> value="1">
                    <span class="slider"></span>
                    <span class="wpur_title_text_seo">Delete other post</span>
                </label>
            </div>
        </div>
    </div>
    <?php
    $wpur_user_page_delete_seo = get_option("wpur_user_page_delete_seo");
    $checked = get_option('wpur_user_page_delete_seo') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_page_delete" class="switch">
        <input type="checkbox" name="wpur_user_page_delete_seo" id="wpur_user_page_delete_seo" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text_seo">Delete Page</span>
    </label>
    <?php
    $wpur_user_page_edit_other_seo = get_option("wpur_user_page_edit_other_seo");
    $checked = get_option('wpur_user_page_edit_other_seo') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_page_edit_other" class="switch">
        <input type="checkbox" name="wpur_user_page_edit_other_seo" id="wpur_user_page_edit_other_seo" <?php echo $checked ?>
               value="1">
        <span class="slider"></span>
        <span class="wpur_title_text_seo">edit Other Page</span>
    </label>
    <?php
    $wpur_user_page_delete_other_seo = get_option("wpur_user_page_delete_other_seo");
    $checked = get_option('wpur_user_page_delete_other_seo') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_page_delete_other_seo" class="switch">
        <input type="checkbox" name="wpur_user_page_delete_other_seo"
               id="wpur_user_page_delete_other_seo" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text_seo">Delete other Page</span>
    </label>


    <?php
    $wpur_user_theme_seo = get_option("wpur_user_theme_seo");
    $checked = get_option('wpur_user_theme_seo') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_theme_seo" class="switch">
        <input type="checkbox" name="wpur_user_theme_seo" id="wpur_user_theme_seo" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text_seo">Theme</span>
    </label>
    <?php
    $wpur_user_users_seo = get_option("wpur_user_users_seo");
    $checked = get_option('wpur_user_users_seo') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_users_seo" class="switch">
        <input type="checkbox" name="wpur_user_users_seo" id="wpur_user_users_seo" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text_seo">Users</span>
    </label>


    <?php
    $wpur_user_media_seo = get_option("wpur_user_media_seo");
    $checked = get_option('wpur_user_media_seo') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_media_seo" class="switch">
        <input type="checkbox" name="wpur_user_media_seo" id="wpur_user_media_seo" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text_seo">Media</span>
    </label>


    <?php
    $wpur_user_plugin_seo = get_option("wpur_user_plugin_seo");
    $checked = get_option('wpur_user_plugin_seo') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_plugin_seo" class="switch">
        <input type="checkbox" name="wpur_user_plugin_seo" id="wpur_user_plugin_seo" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text_seo">Plugin</span>
    </label>

    <?php
    $wpur_user_setting_seo = get_option("wpur_user_setting_seo");
    $checked = get_option('wpur_user_setting_seo') == 1 ? 'checked' : '';
    ?>
    <label for="wpur_user_setting_seo" class="switch">
        <input type="checkbox" name="wpur_user_setting_seo" id="wpur_user_setting_seo" <?php echo $checked ?> value="1">
        <span class="slider"></span>
        <span class="wpur_title_text_seo">Setting</span>
    </label>

    <div class="wpur_text_center_seo">
        <button type="submit"
                class="button button-primary save_gen"><?php echo esc_html_x("Save Settings", "admin", "wpur") ?></button>
    </div>

</form>

</div>



