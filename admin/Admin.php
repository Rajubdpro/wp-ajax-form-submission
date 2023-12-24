<?php
class Ajax_Form_Submission_Admin
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        // Display notice in admin dashboard footer

        // Handle ajax request in admin
        add_action('admin_enqueue_scripts',array($this,'afs_enqueue_scripts'));

        // register a admin page in main sidebar left menu.
        add_action('admin_menu',array($this,'afs_admin_menu'));

    }

    public function afs_admin_menu(){
        add_menu_page(
            __('Ajax Form Submission','wp-ajax-form-submission'),
            __('Ajax Form Submission','wp-ajax-form-submission'),
            'manage_options',
            'afs-admin-page',
            array($this,'afs_admin_page'),
            'dashicons-admin-generic',
            30
        );
    }

    public function afs_admin_page()
    {
        echo "Test";
    }

    public function afs_enqueue_scripts(){
        wp_enqueue_script('afs-script',WPAFS_ASSETS.'/js/afs-script.js',array('jquery'),time(),true);
        wp_localize_script('afs-script','afs_ajax',array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'afs_nonce' => wp_create_nonce('afs-nonce')
        ));
    }
}

// Initialize the class in proper way.

//if(!class_exists('Ajax_Form_Submission_Admin')){
    new Ajax_Form_Submission_Admin();
//}