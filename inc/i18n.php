<?php
class Load_Translation_class{
    public function __construct(){
        $this->init();
    }
    public function init(){
        add_action('plugins_loaded',array($this,'load_textdomain'));
    }
    public function load_textdomain(){
        load_plugin_textdomain('wp-ajax-form-submission',false,dirname(dirname(plugin_basename(__FILE__))).'/languages');
    }
}

// Initialize the class if not exists

if(!class_exists('Load_Translation_class')){
    new Load_Translation_class();
}