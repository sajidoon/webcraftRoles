<?php
add_action('wp_ajax_wpur_request_processor', 'wpur_request_processor');
function wpur_request_processor()
{
    $wpur_what = (!empty($_POST['wpur_what'])) ? esc_attr($_POST['wpur_what']) : 'nothing';
    switch ($wpur_what) {
        case "update_mode":

            if (update_option('w_mode', $_POST['w_mode'])) {
                $response['status'] = 'OK';
                $response['message'] = 'Working Mode Updated Successfully';
            } else {
                $response['status'] = 'Error';
                $response['message'] = 'Working Mode is not Updated, Please try again.';
            }
            break;

        //~~ Save admin settings Area
        case "save_general_settings":
            update_option('wpur_user_post', empty($_POST['wpur_user_post']) ? 0 : 1);
            update_option('wpur_user_post_edit', empty($_POST['wpur_user_post_edit']) ? 0 : 1);
            update_option('wpur_user_post_delete', empty($_POST['wpur_user_post_delete']) ? 0 : 1);
            update_option('wpur_user_post_edit_others', empty($_POST['wpur_user_post_edit_others']) ? 0 : 1);
            update_option('wpur_user_post_delete_others', empty($_POST['wpur_user_post_delete_others']) ? 0 : 1);
            update_option('wpur_user_theme', empty($_POST['wpur_user_theme']) ? 0 : 1);
            update_option('wpur_user_users', empty($_POST['wpur_user_users']) ? 0 : 1);
            update_option('wpur_user_page_edit', empty($_POST['wpur_user_page_edit']) ? 0 : 1);
            update_option('wpur_user_page_delete', empty($_POST['wpur_user_page_delete']) ? 0 : 1);
            update_option('wpur_user_page_edit_other', empty($_POST['wpur_user_page_edit_other']) ? 0 : 1);
            update_option('wpur_user_page_delete_other', empty($_POST['wpur_user_page_delete_other']) ? 0 : 1);
            update_option('wpur_user_page', empty($_POST['wpur_user_page']) ? 0 : 1);
            update_option('wpur_user_media', empty($_POST['wpur_user_media']) ? 0 : 1);
            update_option('wpur_user_plugin', empty($_POST['wpur_user_plugin']) ? 0 : 1);
            update_option('wpur_user_setting', empty($_POST['wpur_user_setting']) ? 0 : 1);

            $response['status'] = 'OK';
            $response['message'] = ' Congratulations!! General Setting Saved Successfully';
            break;
        default:
            $response['message'] = ' Something went wrong. Please try again later';
            $response['status'] = "Error";
    }
    echo json_encode($response, JSON_FORCE_OBJECT);
    die();
}