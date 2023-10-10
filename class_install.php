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
        register_setting('wpur_user_page_edit_other', 'wpur_user_page_edit_other');
        register_setting('wpur_user_page_delete_other', 'wpur_user_page_delete_other');
        register_setting('wpur_user_media', 'wpur_user_media');
        register_setting('wpur_user_plugin', 'wpur_user_plugin');
        register_setting('wpur_user_setting', 'wpur_user_setting');


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
        add_option("wpur_user_media", "");
        add_option("wpur_user_plugin", "");
        add_option("wpur_user_setting", "");


    }

    public function wpur_enqueue_admin_styles_n_scripts()
    {

        wp_register_script("wpur_admin_scripts", WPUR_URL . '/admin/js/main-scripts.js', 'jquery');

        wp_enqueue_script("wpur_admin_scripts");
    }

}
function custom_roles_capabilities_activation() {
    add_role('whmpress_admin', 'WHMPress Admin', array(
        'read' => true,
        'level_0' => true,
    ));

    add_role('whmpress_editor', 'WHMPress Editor', array(
        'read' => true,
        'level_0' => true,
    ));

    add_role('whmpress_seo_expert', 'WHMPress SEO Expert', array(
        'read' => true,
        'level_0' => true,
    ));
}
register_activation_hook(__FILE__, 'custom_roles_capabilities_activation');
add_action('init', 'custom_roles_capabilities_activation');
// Remove custom roles on plugin deactivation
function custom_roles_capabilities_deactivation() {
    remove_role('whmpress_admin');
    remove_role('whmpress_editor');
    remove_role('whmpress_seo_expert');
}
register_deactivation_hook(__FILE__, 'custom_roles_capabilities_deactivation');

// Add custom capabilities to roles
function add_custom_capabilities() {
    // Get the roles
    $admin_role = get_role('whmpress_admin');
    $seo_expert_role = get_role('whmpress_seo_expert');

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
        $wpur_page_edit = get_option('wpur_user_page_edit') == 1;
        $admin_role->add_cap('edit_published_pages',  $wpur_page_edit);
        $wpur_page_delete = get_option('wpur_user_page_delete') == 1;
        $admin_role->add_cap('delete_published_pages', $wpur_page_delete);
        $wpur_page_edit_other = get_option('wpur_user_page_edit_other') == 1;
        $admin_role->add_cap('edit_others_pages', $wpur_page_edit_other);
        $wpur_page_delete_other = get_option('wpur_user_page_delete_other') == 1;
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
    }
}
add_action('init', 'add_custom_capabilities');


// Add a custom menu to the WordPress admin

function add_custom_menu() {
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
function custom_menu_page_content() {
    include_once __DIR__ . "/settings.php";
}

// Hook into admin_menu to add the custom menu
add_action('admin_menu', 'add_custom_menu');



