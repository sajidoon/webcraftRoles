<?php
// Create custom roles on plugin activation

class wpur_install
{
    public function __construct()
    {
        require_once(__DIR__ . '/admin/admin.php');

        add_action('admin_init', [$this, 'register_setting']);
        add_action('admin_init', [$this, 'default_settings']);

        add_action('admin_enqueue_scripts', [$this, 'wpur_enqueue_admin_styles_n_scripts']);

    }


    /**
     * function called when the application is activated
     */

    /*
    //==========Register Settings==============//
    */

    public function register_setting()
    {
        register_setting('wpur_user_post', 'wpur_user_post');
        register_setting('wpur_user_post_edit', 'wpur_user_post_edit');
        register_setting('wpur_user_post_delete', 'wpur_user_post_delete');
        register_setting('wpur_user_post_edit_others', 'wpur_user_post_edit_others');
        register_setting('wpur_user_post_delete_others', 'wpur_user_post_delete_others');
        register_setting('wpur_user_theme', 'wpur_user_theme');
        register_setting('wpur_user_users', 'wpur_user_users');
        register_setting('wpur_user_page', 'wpur_user_page');
        register_setting('wpur_user_page_edit', 'wpur_user_page_edit');
        register_setting('wpur_user_page_delete', 'wpur_user_page_delete');
        register_setting('wpur_user_page_edit_others', 'wpur_user_page_edit_others');
        register_setting('wpur_user_page_delete_others', 'wpur_user_page_delete_others');
        register_setting('wpur_user_media', 'wpur_user_media');
        register_setting('wpur_user_plugin', 'wpur_user_plugin');
        register_setting('wpur_user_setting', 'wpur_user_setting');


//SA ~~ for seo

        register_setting('wpur_user_post_seo', 'wpur_user_post_seo');
        register_setting('wpur_user_post_edit_seo', 'wpur_user_post_edit_seo');
        register_setting('wpur_user_post_delete_seo', 'wpur_user_post_delete_seo');
        register_setting('wpur_user_post_edit_others_seo', 'wpur_user_post_edit_others_seo');
        register_setting('wpur_user_post_delete_others_seo', 'wpur_user_post_delete_others_seo');
        register_setting('wpur_user_theme_seo', 'wpur_user_theme_seo');
        register_setting('wpur_user_users_seo', 'wpur_user_users_seo');
        register_setting('wpur_user_page_seo', 'wpur_user_page_seo');
        register_setting('wpur_user_page_edit_seo', 'wpur_user_page_edit_seo');
        register_setting('wpur_user_page_delete_seo', 'wpur_user_page_delete_seo');
        register_setting('wpur_user_page_edit_others_seo', 'wpur_user_page_edit_others_seo');
        register_setting('wpur_user_page_delete_others_seo', 'wpur_user_page_delete_others_seo');
        register_setting('wpur_user_media_seo', 'wpur_user_media_seo');
        register_setting('wpur_user_plugin_seo', 'wpur_user_plugin_seo');
        register_setting('wpur_user_setting_seo', 'wpur_user_setting_seo');

//Sa ~~~ j-editor

        register_setting('wpur_user_post_j_editor', 'wpur_user_post_j_editor');
        register_setting('wpur_user_post_edit_j_editor', 'wpur_user_post_edit_j_editor');
        register_setting('wpur_user_post_delete_j_editor', 'wpur_user_post_delete_j_editor');
        register_setting('wpur_user_post_edit_others_j_editor', 'wpur_user_post_edit_others_j_editor');
        register_setting('wpur_user_post_delete_others_j_editor', 'wpur_user_post_delete_others_j_editor');
        register_setting('wpur_user_theme_j_editor', 'wpur_user_theme_j_editor');
        register_setting('wpur_user_users_j_editor', 'wpur_user_users_j_editor');
        register_setting('wpur_user_page_j_editor', 'wpur_user_page_j_editor');
        register_setting('wpur_user_page_edit_j_editor', 'wpur_user_page_edit_j_editor');
        register_setting('wpur_user_page_delete_j_editor', 'wpur_user_page_delete_j_editor');
        register_setting('wpur_user_page_edit_others_j_editor', 'wpur_user_page_edit_others_j_editor');
        register_setting('wpur_user_page_delete_others_j_editor', 'wpur_user_page_delete_others_j_editor');
        register_setting('wpur_user_media_j_editor', 'wpur_user_media_j_editor');
        register_setting('wpur_user_plugin_j_editor', 'wpur_user_plugin_j_editor');
        register_setting('wpur_user_setting_j_editor', 'wpur_user_setting_j_editor');


//Sa ~~~ S-editor

        register_setting('wpur_user_post_senior_editor', 'wpur_user_post_senior_editor');
        register_setting('wpur_user_post_edit_senior_editor', 'wpur_user_post_edit_senior_editor');
        register_setting('wpur_user_post_delete_senior_editor', 'wpur_user_post_delete_senior_editor');
        register_setting('wpur_user_post_edit_others_senior_editor', 'wpur_user_post_edit_others_senior_editor');
        register_setting('wpur_user_post_delete_others_senior_editor', 'wpur_user_post_delete_others_senior_editor');
        register_setting('wpur_user_theme_senior_editor', 'wpur_user_theme_senior_editor');
        register_setting('wpur_user_users_senior_editor', 'wpur_user_users_senior_editor');
        register_setting('wpur_user_page_senior_editor', 'wpur_user_page_senior_editor');
        register_setting('wpur_user_page_edit_senior_editor', 'wpur_user_page_edit_senior_editor');
        register_setting('wpur_user_page_delete_senior_editor', 'wpur_user_page_delete_senior_editor');
        register_setting('wpur_user_page_edit_others_senior_editor', 'wpur_user_page_edit_others_senior_editor');
        register_setting('wpur_user_page_delete_others_senior_editor', 'wpur_user_page_delete_others_senior_editor');
        register_setting('wpur_user_media_senior_editor', 'wpur_user_media_senior_editor');
        register_setting('wpur_user_plugin_senior_editor', 'wpur_user_plugin_senior_editor');
        register_setting('wpur_user_setting_senior_editor', 'wpur_user_setting_senior_editor');


//Sa ~~~ J-Admin


        register_setting('wpur_user_post_J_admin', 'wpur_user_post_J_admin');
        register_setting('wpur_user_post_edit_J_admin', 'wpur_user_post_edit_J_admin');
        register_setting('wpur_user_post_delete_J_admin', 'wpur_user_post_delete_J_admin');
        register_setting('wpur_user_post_edit_others_J_admin', 'wpur_user_post_edit_others_J_admin');
        register_setting('wpur_user_post_delete_others_J_admin', 'wpur_user_post_delete_others_J_admin');
        register_setting('wpur_user_theme_J_admin', 'wpur_user_theme_J_admin');
        register_setting('wpur_user_users_J_admin', 'wpur_user_users_J_admin');
        register_setting('wpur_user_page_J_admin', 'wpur_user_page_J_admin');
        register_setting('wpur_user_page_edit_J_admin', 'wpur_user_page_edit_J_admin');
        register_setting('wpur_user_page_delete_J_admin', 'wpur_user_page_delete_J_admin');
        register_setting('wpur_user_page_edit_others_J_admin', 'wpur_user_page_edit_others_J_admin');
        register_setting('wpur_user_page_delete_others_J_admin', 'wpur_user_page_delete_others_J_admin');
        register_setting('wpur_user_media_J_admin', 'wpur_user_media_J_admin');
        register_setting('wpur_user_plugin_J_admin', 'wpur_user_plugin_J_admin');
        register_setting('wpur_user_setting_J_admin', 'wpur_user_setting_J_admin');


//Sa ~~~ Senior Author


        register_setting('wpur_user_post_s_author', 'wpur_user_post_s_author');
        register_setting('wpur_user_post_edit_s_author', 'wpur_user_post_edit_s_author');
        register_setting('wpur_user_post_delete_s_author', 'wpur_user_post_delete_s_author');
        register_setting('wpur_user_post_edit_others_s_author', 'wpur_user_post_edit_others_s_author');
        register_setting('wpur_user_post_delete_others_s_author', 'wpur_user_post_delete_others_s_author');
        register_setting('wpur_user_theme_s_author', 'wpur_user_theme_s_author');
        register_setting('wpur_user_users_s_author', 'wpur_user_users_s_author');
        register_setting('wpur_user_page_s_author', 'wpur_user_page_s_author');
        register_setting('wpur_user_page_edit_s_author', 'wpur_user_page_edit_s_author');
        register_setting('wpur_user_page_delete_s_author', 'wpur_user_page_delete_s_author');
        register_setting('wpur_user_page_edit_others_s_author', 'wpur_user_page_edit_others_s_author');
        register_setting('wpur_user_page_delete_others_s_author', 'wpur_user_page_delete_others_s_author');
        register_setting('wpur_user_media_s_author', 'wpur_user_media_s_author');
        register_setting('wpur_user_plugin_s_author', 'wpur_user_plugin_s_author');
        register_setting('wpur_user_setting_s_author', 'wpur_user_setting_s_author');
    }

    /*
 //==========Default Settings==============//
 */

    public function default_settings()
    {

        add_option("wpur_user_post", "");
        add_option("wpur_user_post_edit", "");
        add_option("wpur_user_post_delete", "");
        add_option("wpur_user_post_edit_others", "");
        add_option("wpur_user_post_delete_others", "");
        add_option("wpur_user_theme", "");
        add_option("wpur_user_users", "");
        add_option("wpur_user_page", "");
        add_option("wpur_user_page_edit", "");
        add_option("wpur_user_page_delete", "");
        add_option("wpur_user_page_edit_others", "");
        add_option("wpur_user_page_delete_others", "");
        add_option("wpur_user_media", "");
        add_option("wpur_user_plugin", "");
        add_option("wpur_user_setting", "");


//SA ~~ for seo
        add_option("wpur_user_post_seo", "");
        add_option("wpur_user_post_edit_seo", "");
        add_option("wpur_user_post_delete_seo", "");
        add_option("wpur_user_post_edit_others_seo", "");
        add_option("wpur_user_post_delete_others_seo", "");
        add_option("wpur_user_theme_seo", "");
        add_option("wpur_user_users_seo", "");
        add_option("wpur_user_page_seo", "");
        add_option("wpur_user_page_edit_seo", "");
        add_option("wpur_user_page_delete_seo", "");
        add_option("wpur_user_page_edit_others_seo", "");
        add_option("wpur_user_page_delete_others_seo", "");
        add_option("wpur_user_media_seo", "");
        add_option("wpur_user_plugin_seo", "");
        add_option("wpur_user_setting_seo", "");

//Sa ~~ j-editor


        add_option("wpur_user_post_j_editor", "");
        add_option("wpur_user_post_edit_j_editor", "");
        add_option("wpur_user_post_delete_j_editor", "");
        add_option("wpur_user_post_edit_others_j_editor", "");
        add_option("wpur_user_post_delete_others_j_editor", "");
        add_option("wpur_user_theme_j_editor", "");
        add_option("wpur_user_users_j_editor", "");
        add_option("wpur_user_page_j_editor", "");
        add_option("wpur_user_page_edit_j_editor", "");
        add_option("wpur_user_page_delete_j_editor", "");
        add_option("wpur_user_page_edit_others_j_editor", "");
        add_option("wpur_user_page_delete_others_j_editor", "");
        add_option("wpur_user_media_j_editor", "");
        add_option("wpur_user_plugin_j_editor", "");
        add_option("wpur_user_setting_j_editor", "");


//Sa ~~ S-editor

        add_option("wpur_user_post_senior_editor", "");
        add_option("wpur_user_post_edit_senior_editor", "");
        add_option("wpur_user_post_delete_senior_editor", "");
        add_option("wpur_user_post_edit_others_senior_editor", "");
        add_option("wpur_user_post_delete_others_senior_editor", "");
        add_option("wpur_user_theme_senior_editor", "");
        add_option("wpur_user_users_senior_editor", "");
        add_option("wpur_user_page_senior_editor", "");
        add_option("wpur_user_page_edit_senior_editor", "");
        add_option("wpur_user_page_delete_senior_editor", "");
        add_option("wpur_user_page_edit_others_senior_editor", "");
        add_option("wpur_user_page_delete_others_senior_editor", "");
        add_option("wpur_user_media_senior_editor", "");
        add_option("wpur_user_plugin_senior_editor", "");
        add_option("wpur_user_setting_senior_editor", "");




//Sa ~~ J admin

        add_option("wpur_user_post_J_admin", "");
        add_option("wpur_user_post_edit_J_admin", "");
        add_option("wpur_user_post_delete_J_admin", "");
        add_option("wpur_user_post_edit_others_J_admin", "");
        add_option("wpur_user_post_delete_others_J_admin", "");
        add_option("wpur_user_theme_J_admin", "");
        add_option("wpur_user_users_J_admin", "");
        add_option("wpur_user_page_J_admin", "");
        add_option("wpur_user_page_edit_J_admin", "");
        add_option("wpur_user_page_delete_J_admin", "");
        add_option("wpur_user_page_edit_others_J_admin", "");
        add_option("wpur_user_page_delete_others_J_admin", "");
        add_option("wpur_user_media_J_admin", "");
        add_option("wpur_user_plugin_J_admin", "");
        add_option("wpur_user_setting_J_admin", "");

//Sa ~~ Senior Author


        add_option("wpur_user_post_s_author", "");
        add_option("wpur_user_post_edit_s_author", "");
        add_option("wpur_user_post_delete_s_author", "");
        add_option("wpur_user_post_edit_others_s_author", "");
        add_option("wpur_user_post_delete_others_s_author", "");
        add_option("wpur_user_theme_s_author", "");
        add_option("wpur_user_users_s_author", "");
        add_option("wpur_user_page_s_author", "");
        add_option("wpur_user_page_edit_s_author", "");
        add_option("wpur_user_page_delete_s_author", "");
        add_option("wpur_user_page_edit_others_s_author", "");
        add_option("wpur_user_page_delete_others_s_author", "");
        add_option("wpur_user_media_s_author", "");
        add_option("wpur_user_plugin_s_author", "");
        add_option("wpur_user_setting_s_author", "");







    }

    public function wpur_enqueue_admin_styles_n_scripts()
    {

        wp_register_script("wpur_admin_scripts", WPUR_URL . '/admin/js/main-scripts.js', 'jquery');

        wp_enqueue_script("wpur_admin_scripts");
    }

}

function custom_roles_capabilities_activation()
{
    add_role('whmpress_admin', 'WHMPress Admin', array(
        'read' => true,
        'level_0' => true,
    ));

    add_role('whmpress_seo', 'WHMPress SEO', array(
        'read' => true,
        'level_0' => true,
    ));

    add_role('whmpress_junior_editor', 'WHMPress Junior Editor ', array(
        'read' => true,
        'level_0' => true,
    ));

    add_role('whmpress_senior_editor', 'WHMPress senior Editor ', array(
        'read' => true,
        'level_0' => true,
    ));

    add_role('whmpress_junior_admin', 'WHMPress junior admin ', array(
        'read' => true,
        'level_0' => true,
    ));

    add_role('whmpress_Senior_author', 'WHMPress Senior author', array(
        'read' => true,
        'level_0' => true,
    ));


}

register_activation_hook(__FILE__, 'custom_roles_capabilities_activation');
add_action('init', 'custom_roles_capabilities_activation');
// Remove custom roles on plugin deactivation
function custom_roles_capabilities_deactivation()
{
    remove_role('whmpress_admin');
    remove_role('whmpress_seo');
    remove_role('whmpress_junior_editor');
    remove_role('whmpress_senior_editor');
    remove_role('whmpress_junior_admin');
    remove_role('whmpress_Senior_author');

}

register_deactivation_hook(__FILE__, 'custom_roles_capabilities_deactivation');

// Add custom capabilities to roles
function add_custom_capabilities()
{
    // Get the roles
    $admin_role = get_role('whmpress_admin');
    $seo_expert_role = get_role('whmpress_seo');
    $junior_editor_role = get_role('whmpress_junior_editor');
    $senior_editor_role = get_role('whmpress_senior_editor');
    $J_admin_admin_role = get_role('whmpress_junior_admin');
    $Senior_author_admin_role = get_role('whmpress_Senior_author');

    // Add custom capabilities to the roles
    if ($admin_role) {
        $wpur_theme = get_option('wpur_user_theme') == 1;
        $admin_role->add_cap('switch_themes', $wpur_theme);
        $admin_role->add_cap('install_themes', $wpur_theme);
        $admin_role->add_cap('edit_theme_options', $wpur_theme);
        $admin_role->add_cap('edit_themes', $wpur_theme);
        $admin_role->add_cap('manage_network_themes', $wpur_theme);
        $admin_role->add_cap('upload_themes', $wpur_theme);
        $admin_role->add_cap('delete_themes', $wpur_theme);
        $admin_role->add_cap('update_themes', $wpur_theme);

        $wpur_users = get_option('wpur_user_users') == 1;
        $admin_role->add_cap('list_users', $wpur_users);
        $admin_role->add_cap('edit_users', $wpur_users);
        $admin_role->add_cap('add_users', $wpur_users);
        $admin_role->add_cap('create_users', $wpur_users);
        $admin_role->add_cap('delete_users', $wpur_users);

        $wpur_post = get_option('wpur_user_post') == 1;
        $admin_role->add_cap('edit_posts', $wpur_post);
        $admin_role->add_cap('publish_posts', $wpur_post);
        $admin_role->add_cap('delete_private_posts', $wpur_post);
        $admin_role->add_cap('edit_private_posts', $wpur_post);
        $admin_role->add_cap('read_private_posts', $wpur_post);
        $admin_role->add_cap('delete_posts', $wpur_post);
        $wpur_post_edit = get_option('wpur_user_post_edit') == 1;
        $admin_role->add_cap('edit_published_posts', $wpur_post_edit);
        $wpur_post_delete = get_option('wpur_user_post_delete') == 1;
        $admin_role->add_cap('delete_published_posts', $wpur_post_delete);
        $wpur_post_edit_others = get_option('wpur_user_post_edit_others') == 1;
        $admin_role->add_cap('edit_others_posts', $wpur_post_edit_others);
        $wpur_post_delete_others = get_option('wpur_user_post_delete_others') == 1;
        $admin_role->add_cap('delete_others_posts', $wpur_post_delete_others);

        $wpur_pages = get_option('wpur_user_page') == 1;
        $admin_role->add_cap('edit_pages', $wpur_pages);
        $admin_role->add_cap('publish_pages', $wpur_pages);
        $admin_role->add_cap('delete_pages', $wpur_pages);
        $admin_role->add_cap('delete_private_pages', $wpur_pages);
        $admin_role->add_cap('edit_private_pages', $wpur_pages);
        $admin_role->add_cap('read_private_pages', $wpur_pages);
        $wpur_page_edit = get_option('wpur_user_page_edit' ) == 1;
        $admin_role->add_cap('edit_published_pages', $wpur_page_edit);
        $wpur_page_delete = get_option('wpur_user_page_delete') == 1;
        $admin_role->add_cap('delete_published_pages', $wpur_page_delete);
        $wpur_page_edit_other = get_option('wpur_user_page_edit_others') == 1;
        $admin_role->add_cap('edit_others_pages', $wpur_page_edit_other);
        $wpur_page_delete_other = get_option('wpur_user_page_delete_others') == 1;
        $admin_role->add_cap('delete_others_pages', $wpur_page_delete_other);

        $wpur_media = get_option('wpur_user_media') == 1;
        $admin_role->add_cap('upload_files', $wpur_media);

        $wpur_plugin = get_option('wpur_user_plugin') == 1;
        $admin_role->add_cap('manage_network_plugins', $wpur_plugin);
        $admin_role->add_cap('upload_plugins', $wpur_plugin);
        $admin_role->add_cap('activate_plugins', $wpur_plugin);
        $admin_role->add_cap('delete_plugins', $wpur_plugin);
        $admin_role->add_cap('edit_plugins', $wpur_plugin);
        $admin_role->add_cap('install_plugins', $wpur_plugin);
        $admin_role->add_cap('update_plugins', $wpur_plugin);

        $wpur_setting = get_option('wpur_user_setting') == 1;
        $admin_role->add_cap('manage_options', $wpur_setting);
    }

    if ($seo_expert_role) {
        $wpur_theme_seo = get_option('wpur_user_theme_seo') == 1;
        $seo_expert_role->add_cap('switch_themes', $wpur_theme_seo);
        $seo_expert_role->add_cap('install_themes', $wpur_theme_seo);
        $seo_expert_role->add_cap('edit_theme_options', $wpur_theme_seo);
        $seo_expert_role->add_cap('edit_themes', $wpur_theme_seo);
        $seo_expert_role->add_cap('manage_network_themes', $wpur_theme_seo);
        $seo_expert_role->add_cap('upload_themes', $wpur_theme_seo);
        $seo_expert_role->add_cap('delete_themes', $wpur_theme_seo);
        $seo_expert_role->add_cap('update_themes', $wpur_theme_seo);

        $wpur_users_seo = get_option('wpur_user_users_seo') == 1;
        $seo_expert_role->add_cap('list_users', $wpur_users_seo);
        $seo_expert_role->add_cap('edit_users', $wpur_users_seo);
        $seo_expert_role->add_cap('add_users', $wpur_users_seo);
        $seo_expert_role->add_cap('create_users', $wpur_users_seo);
        $seo_expert_role->add_cap('delete_users', $wpur_users_seo);

        $wpur_post_seo = get_option('wpur_user_post_seo') == 1;
        $seo_expert_role->add_cap('edit_posts', $wpur_post_seo);
        $seo_expert_role->add_cap('publish_posts', $wpur_post_seo);
        $seo_expert_role->add_cap('delete_private_posts', $wpur_post_seo);
        $seo_expert_role->add_cap('edit_private_posts', $wpur_post_seo);
        $seo_expert_role->add_cap('read_private_posts', $wpur_post_seo);
        $seo_expert_role->add_cap('delete_posts', $wpur_post_seo);
        $wpur_post_edit_seo = get_option('wpur_user_post_edit_seo') == 1;
        $seo_expert_role->add_cap('edit_published_posts', $wpur_post_edit_seo);
        $wpur_post_delete_seo = get_option('wpur_user_post_delete_seo') == 1;
        $seo_expert_role->add_cap('delete_published_posts', $wpur_post_delete_seo);
        $wpur_post_edit_others_seo = get_option('wpur_user_post_edit_others_seo') == 1;
        $seo_expert_role->add_cap('edit_others_posts', $wpur_post_edit_others_seo);
        $wpur_post_delete_others_seo = get_option('wpur_user_post_delete_others_seo') == 1;
        $seo_expert_role->add_cap('delete_others_posts', $wpur_post_delete_others_seo);

        $wpur_pages_seo = get_option('wpur_user_page_seo') == 1;
        $seo_expert_role->add_cap('edit_pages', $wpur_pages_seo);
        $seo_expert_role->add_cap('publish_pages', $wpur_pages_seo);
        $seo_expert_role->add_cap('delete_pages', $wpur_pages_seo);
        $seo_expert_role->add_cap('delete_private_pages', $wpur_pages_seo);
        $seo_expert_role->add_cap('edit_private_pages', $wpur_pages_seo);
        $seo_expert_role->add_cap('read_private_pages', $wpur_pages_seo);
        $wpur_page_edit_seo = get_option('wpur_user_page_edit_seo' ) == 1;
        $seo_expert_role->add_cap('edit_published_pages',  $wpur_page_edit_seo);
        $wpur_page_delete_seo = get_option('wpur_user_page_delete_seo') == 1;
        $seo_expert_role->add_cap('delete_published_pages', $wpur_page_delete_seo);
        $wpur_page_edit_other_seo = get_option('wpur_user_page_edit_others_seo') == 1;
        $seo_expert_role->add_cap('edit_others_pages', $wpur_page_edit_other_seo);
        $wpur_page_delete_other_seo = get_option('wpur_user_page_delete_others_seo') == 1;
        $seo_expert_role->add_cap('delete_others_pages', $wpur_page_delete_other_seo);

        $wpur_media_seo = get_option('wpur_user_media_seo') == 1;
        $seo_expert_role->add_cap('upload_files', $wpur_media_seo);

        $wpur_plugin_seo = get_option('wpur_user_plugin_seo') == 1;
        $seo_expert_role->add_cap('manage_network_plugins',  $wpur_plugin_seo);
        $seo_expert_role->add_cap('upload_plugins',  $wpur_plugin_seo);
        $seo_expert_role->add_cap('activate_plugins',  $wpur_plugin_seo);
        $seo_expert_role->add_cap('delete_plugins',  $wpur_plugin_seo);
        $seo_expert_role->add_cap('edit_plugins',  $wpur_plugin_seo);
        $seo_expert_role->add_cap('install_plugins',  $wpur_plugin_seo);
        $seo_expert_role->add_cap('update_plugins',  $wpur_plugin_seo);

        $wpur_setting_seo = get_option('wpur_user_setting_seo') == 1;
        $seo_expert_role->add_cap('manage_options', $wpur_setting_seo);
    }

    if ($junior_editor_role) {
        $wpur_theme_j_editor = get_option('wpur_user_theme_j_editor') == 1;
        $junior_editor_role->add_cap('switch_themes', $wpur_theme_j_editor);
        $junior_editor_role->add_cap('install_themes', $wpur_theme_j_editor);
        $junior_editor_role->add_cap('edit_theme_options', $wpur_theme_j_editor);
        $junior_editor_role->add_cap('edit_themes', $wpur_theme_j_editor);
        $junior_editor_role->add_cap('manage_network_themes', $wpur_theme_j_editor);
        $junior_editor_role->add_cap('upload_themes', $wpur_theme_j_editor);
        $junior_editor_role->add_cap('delete_themes', $wpur_theme_j_editor);
        $junior_editor_role->add_cap('update_themes', $wpur_theme_j_editor);

        $wpur_users_j_editor = get_option('wpur_user_users_j_editor') == 1;
        $junior_editor_role->add_cap('list_users', $wpur_users_j_editor);
        $junior_editor_role->add_cap('edit_users', $wpur_users_j_editor);
        $junior_editor_role->add_cap('add_users', $wpur_users_j_editor);
        $junior_editor_role->add_cap('create_users', $wpur_users_j_editor);
        $junior_editor_role->add_cap('delete_users', $wpur_users_j_editor);

        $wpur_post_j_editor = get_option('wpur_user_post_j_editor') == 1;
        $junior_editor_role->add_cap('edit_posts',  $wpur_post_j_editor);
        $junior_editor_role->add_cap('publish_posts',  $wpur_post_j_editor);
        $junior_editor_role->add_cap('delete_private_posts',  $wpur_post_j_editor);
        $junior_editor_role->add_cap('edit_private_posts',  $wpur_post_j_editor);
        $junior_editor_role->add_cap('read_private_posts',  $wpur_post_j_editor);
        $junior_editor_role->add_cap('delete_posts',  $wpur_post_j_editor);
        $wpur_post_edit_j_editor = get_option('wpur_user_post_edit') == 1;
        $junior_editor_role->add_cap('edit_published_posts', $wpur_post_edit_j_editor);
        $wpur_post_delete_j_editor = get_option('wpur_user_post_delete') == 1;
        $junior_editor_role->add_cap('delete_published_posts', $wpur_post_delete_j_editor);
        $wpur_post_edit_others_j_editor = get_option('wpur_user_post_edit_others') == 1;
        $junior_editor_role->add_cap('edit_others_posts', $wpur_post_edit_others_j_editor);
        $wpur_post_delete_others_j_editor = get_option('wpur_user_post_delete_others') == 1;
        $junior_editor_role->add_cap('delete_others_posts', $wpur_post_delete_others_j_editor);

        $wpur_pages_j_editor = get_option('wpur_user_page_j_editor') == 1;
        $junior_editor_role->add_cap('edit_pages', $wpur_pages_j_editor);
        $junior_editor_role->add_cap('publish_pages', $wpur_pages_j_editor);
        $junior_editor_role->add_cap('delete_pages', $wpur_pages_j_editor);
        $junior_editor_role->add_cap('delete_private_pages', $wpur_pages_j_editor);
        $junior_editor_role->add_cap('edit_private_pages', $wpur_pages_j_editor);
        $junior_editor_role->add_cap('read_private_pages', $wpur_pages_j_editor);
        $wpur_page_edit_j_editor = get_option('wpur_user_page_edit_j_editor' ) == 1;
        $junior_editor_role->add_cap('edit_published_pages', $wpur_page_edit_j_editor);
        $wpur_page_delete_j_editor = get_option('wpur_user_page_delete_j_editor') == 1;
        $junior_editor_role->add_cap('delete_published_pages', $wpur_page_delete_j_editor);
        $wpur_page_edit_other_j_editor = get_option('wpur_user_page_edit_others_j_editor') == 1;
        $junior_editor_role->add_cap('edit_others_pages', $wpur_page_edit_other_j_editor);
        $wpur_page_delete_other_j_editor = get_option('wpur_user_page_delete_others_j_editor') == 1;
        $junior_editor_role->add_cap('delete_others_pages', $wpur_page_delete_other_j_editor);

        $wpur_media_j_editor = get_option('wpur_user_media_j_editor') == 1;
        $junior_editor_role->add_cap('upload_files', $wpur_media_j_editor);

        $wpur_plugin_j_editor = get_option('wpur_user_plugin_j_editor') == 1;
        $junior_editor_role->add_cap('manage_network_plugins', $wpur_plugin_j_editor);
        $junior_editor_role->add_cap('upload_plugins', $wpur_plugin_j_editor);
        $junior_editor_role->add_cap('activate_plugins', $wpur_plugin_j_editor);
        $junior_editor_role->add_cap('delete_plugins', $wpur_plugin_j_editor);
        $junior_editor_role->add_cap('edit_plugins', $wpur_plugin_j_editor);
        $junior_editor_role->add_cap('install_plugins', $wpur_plugin_j_editor);
        $junior_editor_role->add_cap('update_plugins', $wpur_plugin_j_editor);

        $wpur_setting_j_editor = get_option('wpur_user_setting_j_editor') == 1;
        $junior_editor_role->add_cap('manage_options', $wpur_setting_j_editor);

    }

    if ($senior_editor_role) {
        $wpur_theme_senior_editor = get_option('wpur_user_theme_senior_editor') == 1;
        $senior_editor_role->add_cap('switch_themes', $wpur_theme_senior_editor);
        $senior_editor_role->add_cap('install_themes', $wpur_theme_senior_editor);
        $senior_editor_role->add_cap('edit_theme_options', $wpur_theme_senior_editor);
        $senior_editor_role->add_cap('edit_themes', $wpur_theme_senior_editor);
        $senior_editor_role->add_cap('manage_network_themes', $wpur_theme_senior_editor);
        $senior_editor_role->add_cap('upload_themes', $wpur_theme_senior_editor);
        $senior_editor_role->add_cap('delete_themes', $wpur_theme_senior_editor);
        $senior_editor_role->add_cap('update_themes', $wpur_theme_senior_editor);

        $wpur_users_senior_editor = get_option('wpur_user_users_senior_editor') == 1;
        $senior_editor_role->add_cap('list_users', $wpur_users_senior_editor);
        $senior_editor_role->add_cap('edit_users', $wpur_users_senior_editor);
        $senior_editor_role->add_cap('add_users', $wpur_users_senior_editor);
        $senior_editor_role->add_cap('create_users', $wpur_users_senior_editor);
        $senior_editor_role->add_cap('delete_users', $wpur_users_senior_editor);

        $wpur_post_senior_editor = get_option('wpur_user_post_senior_editor') == 1;
        $senior_editor_role->add_cap('edit_posts', $wpur_post_senior_editor);
        $senior_editor_role->add_cap('publish_posts', $wpur_post_senior_editor);
        $senior_editor_role->add_cap('delete_private_posts', $wpur_post_senior_editor);
        $senior_editor_role->add_cap('edit_private_posts', $wpur_post_senior_editor);
        $senior_editor_role->add_cap('read_private_posts', $wpur_post_senior_editor);
        $senior_editor_role->add_cap('delete_posts', $wpur_post_senior_editor);
        $wpur_post_edit_senior_editor = get_option('wpur_user_post_edit_senior_editor') == 1;
        $senior_editor_role->add_cap('edit_published_posts', $wpur_post_edit_senior_editor);
        $wpur_post_delete_senior_editor = get_option('wpur_user_post_delete') == 1;
        $senior_editor_role->add_cap('delete_published_posts', $wpur_post_delete_senior_editor);
        $wpur_post_edit_others_senior_editor = get_option('wpur_user_post_edit_others') == 1;
        $senior_editor_role->add_cap('edit_others_posts', $wpur_post_edit_others_senior_editor);
        $wpur_post_delete_others_senior_editor = get_option('wpur_user_post_delete_others_senior_editor') == 1;
        $senior_editor_role->add_cap('delete_others_posts', $wpur_post_delete_others_senior_editor);

        $wpur_pages_senior_editor = get_option('wpur_user_page_senior_editor') == 1;
        $senior_editor_role->add_cap('edit_pages', $wpur_pages_senior_editor);
        $senior_editor_role->add_cap('publish_pages', $wpur_pages_senior_editor);
        $senior_editor_role->add_cap('delete_pages', $wpur_pages_senior_editor);
        $senior_editor_role->add_cap('delete_private_pages', $wpur_pages_senior_editor);
        $senior_editor_role->add_cap('edit_private_pages', $wpur_pages_senior_editor);
        $senior_editor_role->add_cap('read_private_pages', $wpur_pages_senior_editor);
        $wpur_page_edit_senior_editor = get_option('wpur_user_page_edit_senior_editor' ) == 1;
        $senior_editor_role->add_cap('edit_published_pages', $wpur_page_edit_senior_editor);
        $wpur_page_delete_senior_editor = get_option('wpur_user_page_delete_senior_editor') == 1;
        $senior_editor_role->add_cap('delete_published_pages', $wpur_page_delete_senior_editor);
        $wpur_page_edit_other_senior_editor = get_option('wpur_user_page_edit_others_senior_editor') == 1;
        $senior_editor_role->add_cap('edit_others_pages', $wpur_page_edit_other_senior_editor);
        $wpur_page_delete_other_senior_editor = get_option('wpur_user_page_delete_others_senior_editor') == 1;
        $senior_editor_role->add_cap('delete_others_pages', $wpur_page_delete_other_senior_editor);

        $wpur_media_senior_editor = get_option('wpur_user_media_senior_editor') == 1;
        $senior_editor_role->add_cap('upload_files', $wpur_media_senior_editor);

        $wpur_plugin_senior_editor = get_option('wpur_user_plugin_senior_editor') == 1;
        $senior_editor_role->add_cap('manage_network_plugins', $wpur_plugin_senior_editor);
        $senior_editor_role->add_cap('upload_plugins', $wpur_plugin_senior_editor);
        $senior_editor_role->add_cap('activate_plugins', $wpur_plugin_senior_editor);
        $senior_editor_role->add_cap('delete_plugins', $wpur_plugin_senior_editor);
        $senior_editor_role->add_cap('edit_plugins', $wpur_plugin_senior_editor);
        $senior_editor_role->add_cap('install_plugins', $wpur_plugin_senior_editor);
        $senior_editor_role->add_cap('update_plugins', $wpur_plugin_senior_editor);

        $wpur_setting_senior_editor = get_option('wpur_user_setting_senior_editor') == 1;
        $senior_editor_role->add_cap('manage_options', $wpur_setting_senior_editor);
    }

    if ($J_admin_admin_role) {
        $wpur_theme_J_admin = get_option('wpur_user_theme_J_admin') == 1;
        $J_admin_admin_role->add_cap('switch_themes', $wpur_theme_J_admin);
        $J_admin_admin_role->add_cap('install_themes', $wpur_theme_J_admin);
        $J_admin_admin_role->add_cap('edit_theme_options', $wpur_theme_J_admin);
        $J_admin_admin_role->add_cap('edit_themes', $wpur_theme_J_admin);
        $J_admin_admin_role->add_cap('manage_network_themes', $wpur_theme_J_admin);
        $J_admin_admin_role->add_cap('upload_themes', $wpur_theme_J_admin);
        $J_admin_admin_role->add_cap('delete_themes', $wpur_theme_J_admin);
        $J_admin_admin_role->add_cap('update_themes', $wpur_theme_J_admin);

        $wpur_users_J_admin = get_option('wpur_user_users_J_admin') == 1;
        $J_admin_admin_role->add_cap('list_users', $wpur_users_J_admin);
        $J_admin_admin_role->add_cap('edit_users', $wpur_users_J_admin);
        $J_admin_admin_role->add_cap('add_users', $wpur_users_J_admin);
        $J_admin_admin_role->add_cap('create_users', $wpur_users_J_admin);
        $J_admin_admin_role->add_cap('delete_users', $wpur_users_J_admin);

        $wpur_post_J_admin = get_option('wpur_user_post_J_admin') == 1;
        $J_admin_admin_role->add_cap('edit_posts', $wpur_post_J_admin);
        $J_admin_admin_role->add_cap('publish_posts', $wpur_post_J_admin);
        $J_admin_admin_role->add_cap('delete_private_posts', $wpur_post_J_admin);
        $J_admin_admin_role->add_cap('edit_private_posts', $wpur_post_J_admin);
        $J_admin_admin_role->add_cap('read_private_posts', $wpur_post_J_admin);
        $J_admin_admin_role->add_cap('delete_posts', $wpur_post_J_admin);
        $wpur_post_edit_J_admin = get_option('wpur_user_post_edit_J_admin') == 1;
        $J_admin_admin_role->add_cap('edit_published_posts', $wpur_post_edit_J_admin);
        $wpur_post_delete_J_admin = get_option('wpur_user_post_delete_J_admin') == 1;
        $J_admin_admin_role->add_cap('delete_published_posts', $wpur_post_delete_J_admin);
        $wpur_post_edit_others_J_admin = get_option('wpur_user_post_edit_others_J_admin') == 1;
        $J_admin_admin_role->add_cap('edit_others_posts', $wpur_post_edit_others_J_admin);
        $wpur_post_delete_others_J_admin = get_option('wpur_user_post_delete_others_J_admin') == 1;
        $J_admin_admin_role->add_cap('delete_others_posts', $wpur_post_delete_others_J_admin);

        $wpur_pages_J_admin = get_option('wpur_user_page_J_admin') == 1;
        $J_admin_admin_role->add_cap('edit_pages', $wpur_pages_J_admin);
        $J_admin_admin_role->add_cap('publish_pages', $wpur_pages_J_admin);
        $J_admin_admin_role->add_cap('delete_pages', $wpur_pages_J_admin);
        $J_admin_admin_role->add_cap('delete_private_pages', $wpur_pages_J_admin);
        $J_admin_admin_role->add_cap('edit_private_pages', $wpur_pages_J_admin);
        $J_admin_admin_role->add_cap('read_private_pages', $wpur_pages_J_admin);
        $wpur_page_edit_J_admin = get_option('wpur_user_page_edit_J_admin' ) == 1;
        $J_admin_admin_role->add_cap('edit_published_pages', $wpur_page_edit_J_admin);
        $wpur_page_delete_J_admin = get_option('wpur_user_page_delete_J_admin') == 1;
        $J_admin_admin_role->add_cap('delete_published_pages', $wpur_page_delete_J_admin);
        $wpur_page_edit_other_J_admin = get_option('wpur_user_page_edit_others_J_admin') == 1;
        $J_admin_admin_role->add_cap('edit_others_pages', $wpur_page_edit_other_J_admin);
        $wpur_page_delete_other_J_admin = get_option('wpur_user_page_delete_others_J_admin') == 1;
        $J_admin_admin_role->add_cap('delete_others_pages', $wpur_page_delete_other_J_admin);

        $wpur_media_J_admin = get_option('wpur_user_media_J_admin') == 1;
        $J_admin_admin_role->add_cap('upload_files', $wpur_media_J_admin);

        $wpur_plugin_J_admin = get_option('wpur_user_plugin_J_admin') == 1;
        $J_admin_admin_role->add_cap('manage_network_plugins', $wpur_plugin_J_admin);
        $J_admin_admin_role->add_cap('upload_plugins', $wpur_plugin_J_admin);
        $J_admin_admin_role->add_cap('activate_plugins', $wpur_plugin_J_admin);
        $J_admin_admin_role->add_cap('delete_plugins', $wpur_plugin_J_admin);
        $J_admin_admin_role->add_cap('edit_plugins', $wpur_plugin_J_admin);
        $J_admin_admin_role->add_cap('install_plugins', $wpur_plugin_J_admin);
        $J_admin_admin_role->add_cap('update_plugins', $wpur_plugin_J_admin);

        $wpur_setting = get_option('wpur_user_setting') == 1;
        $J_admin_admin_role->add_cap('manage_options', $wpur_setting);
    }

    if ($Senior_author_admin_role) {
        $wpur_theme_s_author = get_option('wpur_user_theme_s_author') == 1;
        $Senior_author_admin_role->add_cap('switch_themes', $wpur_theme_s_author);
        $Senior_author_admin_role->add_cap('install_themes', $wpur_theme_s_author);
        $Senior_author_admin_role->add_cap('edit_theme_options', $wpur_theme_s_author);
        $Senior_author_admin_role->add_cap('edit_themes', $wpur_theme_s_author);
        $Senior_author_admin_role->add_cap('manage_network_themes', $wpur_theme_s_author);
        $Senior_author_admin_role->add_cap('upload_themes', $wpur_theme_s_author);
        $Senior_author_admin_role->add_cap('delete_themes', $wpur_theme_s_author);
        $Senior_author_admin_role->add_cap('update_themes', $wpur_theme_s_author);

        $wpur_users_s_author = get_option('wpur_user_users_s_author') == 1;
        $Senior_author_admin_role->add_cap('list_users', $wpur_users_s_author);
        $Senior_author_admin_role->add_cap('edit_users', $wpur_users_s_author);
        $Senior_author_admin_role->add_cap('add_users', $wpur_users_s_author);
        $Senior_author_admin_role->add_cap('create_users', $wpur_users_s_author);
        $Senior_author_admin_role->add_cap('delete_users', $wpur_users_s_author);

        $wpur_post_s_author = get_option('wpur_user_post_s_author') == 1;
        $Senior_author_admin_role->add_cap('edit_posts', $wpur_post_s_author);
        $Senior_author_admin_role->add_cap('publish_posts', $wpur_post_s_author);
        $Senior_author_admin_role->add_cap('delete_private_posts', $wpur_post_s_author);
        $Senior_author_admin_role->add_cap('edit_private_posts', $wpur_post_s_author);
        $Senior_author_admin_role->add_cap('read_private_posts', $wpur_post_s_author);
        $Senior_author_admin_role->add_cap('delete_posts', $wpur_post_s_author);
        $wpur_post_edit_s_author = get_option('wpur_user_post_edit_s_author') == 1;
        $Senior_author_admin_role->add_cap('edit_published_posts', $wpur_post_edit_s_author);
        $wpur_post_delete_s_author = get_option('wpur_user_post_delete_s_author') == 1;
        $Senior_author_admin_role->add_cap('delete_published_posts', $wpur_post_delete_s_author);
        $wpur_post_edit_others_s_author = get_option('wpur_user_post_edit_others_s_author') == 1;
        $Senior_author_admin_role->add_cap('edit_others_posts', $wpur_post_edit_others_s_author);
        $wpur_post_delete_others_s_author = get_option('wpur_user_post_delete_others_s_author') == 1;
        $Senior_author_admin_role->add_cap('delete_others_posts', $wpur_post_delete_others_s_author);

        $wpur_pages_s_author = get_option('wpur_user_page_s_author') == 1;
        $Senior_author_admin_role->add_cap('edit_pages', $wpur_pages_s_author);
        $Senior_author_admin_role->add_cap('publish_pages', $wpur_pages_s_author);
        $Senior_author_admin_role->add_cap('delete_pages', $wpur_pages_s_author);
        $Senior_author_admin_role->add_cap('delete_private_pages', $wpur_pages_s_author);
        $Senior_author_admin_role->add_cap('edit_private_pages', $wpur_pages_s_author);
        $Senior_author_admin_role->add_cap('read_private_pages', $wpur_pages_s_author);
        $wpur_page_edit_s_author = get_option('wpur_user_page_edit_s_author' ) == 1;
        $Senior_author_admin_role->add_cap('edit_published_pages', $wpur_page_edit_s_author);
        $wpur_page_delete_s_author = get_option('wpur_user_page_delete_s_author') == 1;
        $Senior_author_admin_role->add_cap('delete_published_pages', $wpur_page_delete_s_author);
        $wpur_page_edit_other_s_author = get_option('wpur_user_page_edit_others_s_author') == 1;
        $Senior_author_admin_role->add_cap('edit_others_pages', $wpur_page_edit_other_s_author);
        $wpur_page_delete_other_s_author = get_option('wpur_user_page_delete_others_s_author') == 1;
        $Senior_author_admin_role->add_cap('delete_others_pages', $wpur_page_delete_other_s_author);

        $wpur_media_s_author = get_option('wpur_user_media_s_author') == 1;
        $Senior_author_admin_role->add_cap('upload_files', $wpur_media_s_author);

        $wpur_plugin_s_author = get_option('wpur_user_plugin_s_author') == 1;
        $Senior_author_admin_role->add_cap('manage_network_plugins', $wpur_plugin_s_author);
        $Senior_author_admin_role->add_cap('upload_plugins', $wpur_plugin_s_author);
        $Senior_author_admin_role->add_cap('activate_plugins', $wpur_plugin_s_author);
        $Senior_author_admin_role->add_cap('delete_plugins', $wpur_plugin_s_author);
        $Senior_author_admin_role->add_cap('edit_plugins', $wpur_plugin_s_author);
        $Senior_author_admin_role->add_cap('install_plugins', $wpur_plugin_s_author);
        $Senior_author_admin_role->add_cap('update_plugins', $wpur_plugin_s_author);

        $wpur_setting = get_option('wpur_user_setting') == 1;
        $Senior_author_admin_role->add_cap('manage_options', $wpur_setting);
    }

}

add_action('init', 'add_custom_capabilities');


// Add a custom menu to the WordPress admin

function add_custom_menu()
{
    add_menu_page(
        'Custom Menu',
        'User Role',
        'edit_theme_options', // Required capability to access
        'setting',
        'custom_menu_page_content',
        'dashicons-admin-generic'
    );
}

// Callback function to display content on the custom menu page
function custom_menu_page_content()
{
    include_once __DIR__ . "/settings.php";
}

// Hook into admin_menu to add the custom menu
add_action('admin_menu', 'add_custom_menu');



