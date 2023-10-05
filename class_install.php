<?php
// Create custom roles on plugin activation

class ptsc_install
{
    public function __construct()
    {
        require_once(__DIR__ . '/admin/admin.php');

        add_action('admin_init', [$this, 'register_setting']);
        add_action('admin_init', [$this, 'default_settings']);

        add_action('admin_enqueue_scripts', [$this, 'ptsc_enqueue_admin_styles_n_scripts']);

    }


    /**
     * function called when the application is activated
     */

    /*
    //==========Register Settings==============//
    */

    public function register_setting()
    {
        register_setting('am_user_post', 'am_user_post');


    }

    /*
 //==========Default Settings==============//
 */

    public function default_settings()
    {

        add_option("am_user_post", "");


    }

    public function ptsc_enqueue_admin_styles_n_scripts()
    {

        wp_register_script("ptsc_admin_scripts", PTSC_URL . '/admin/js/main-scripts.js', 'jquery');

        wp_enqueue_script("ptsc_admin_scripts");
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
        $admin_role->add_cap('switch_themes', true);
        $admin_role->add_cap('install_themes', true);
        $admin_role->add_cap('list_users', true);
        $admin_role->add_cap('edit_users', true);
        $admin_role->add_cap('add_users', true);
        $admin_role->add_cap('create_users', true);
        $admin_role->add_cap('delete_users', true);
        $wm_post = get_option('am_user_post') == 1 ? true : false;
        $admin_role->add_cap('delete_posts', $wm_post);
        $admin_role->add_cap('delete_published_posts', $wm_post);
        $admin_role->add_cap('edit_posts', $wm_post);
        $admin_role->add_cap('edit_published_posts', $wm_post);
        $admin_role->add_cap('publish_posts', $wm_post);
    }

    if ($seo_expert_role) {
        $seo_expert_role->add_cap('delete_posts', true);
        $seo_expert_role->add_cap('delete_published_posts', true);
        $seo_expert_role->add_cap('edit_posts', true);
        $seo_expert_role->add_cap('edit_published_posts', true);
        $seo_expert_role->add_cap('publish_posts', true);
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



