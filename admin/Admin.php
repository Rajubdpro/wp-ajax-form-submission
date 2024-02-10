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

		add_action('wp_ajax_afs_form_submit', [$this, 'collect_ajax_value']);
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
    public function collect_ajax_value() {
        // Check if the request is coming via AJAX
        if ( ! isset( $_POST['ajax_data'] ) || ! wp_verify_nonce( $_POST['afs_nonce'], 'afs-nonce' ) ) {
            wp_send_json_error( 'Invalid request' );
            wp_die();
        }

        // Sanitize and validate the data before saving
        $ajax_data = $_POST['ajax_data'];

        // Update the option value after serializing it
        update_option( 'afs_form_data', $ajax_data );

        // Send success response
        wp_send_json_success( [
            'message' => 'Data sent successfully',
            'data' => $ajax_data,
        ]);
        wp_die();
    }

	public function afs_admin_page()
	{
		require_once WPAFS_ADMIN."/template/form.php";
	}

	public function afs_enqueue_scripts(){
		wp_enqueue_style('admin_style', (WPAFS_ASSETS . '/css/style.css'), null, WPAFS_VERSION, 'all' );
		wp_enqueue_script('afs-script',WPAFS_ASSETS.'/js/afs-script.js',array('jquery'),time(),true);
		wp_localize_script('afs-script','afs_ajax',array(
			'ajax_url' => admin_url('admin-ajax.php'),
			'afs_nonce' => wp_create_nonce('afs-nonce')
		));
	}
}

// Initialize the class in proper way.

//if(!class_exists('Ajax_Form_Submission_Admin')){
new Ajax_Form_Submission_Admin();
//}