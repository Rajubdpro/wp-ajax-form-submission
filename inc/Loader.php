<?php
class Ajax_Form_Submission_Loader
{
    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        // Load Admin Class
        if ( is_admin() ) {
            require_once WPAFS_ADMIN . '/Admin.php';
        }

        // Load i18n class
        require_once WPAFS_INC . '/i18n.php';

    }
}

// Initialize the class in proper way.

//if(!class_exists('Ajax_Form_Submission_Loader')){
    new Ajax_Form_Submission_Loader();
//}