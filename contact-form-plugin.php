<?php

/*
Plugin Name: Contact Form by Marko Pajic
Plugin URI: http://wordpress.org/plugins/
Description: Contact Form plugin for sending email to owner of website.
Author: Marko Pajic
Version: 1.0.0
Author URI: 
*/

if( !defined('ABSPATH') ){
    die('Restricted!');
}

if(!class_exists('ContactFormPlugin')){
class ContactFormPlugin {

        public function __construct(){

            define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));
            

            require_once( MY_PLUGIN_PATH .'/vendor/autoload.php');
        }

        public function initalize()
        {
            include_once MY_PLUGIN_PATH . 'includes/utilities.php';

            include_once MY_PLUGIN_PATH . 'includes/options-page.php';

            include_once MY_PLUGIN_PATH . 'includes/contact-form.php';


        }


    }

$contactPlugin = new ContactFormPlugin;

$contactPlugin->initalize();

}