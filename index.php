<?php

/**
 * Plugin Name: Custom Form
 * Description: This is test plugin
 * Author: Rajender
 * Version: 1.1
 */

class CustomForm
{

    public function __construct()
    {
        add_action('init', array($this, 'init'));
        add_shortcode('custom_form', array($this, 'shortcode_handler'));
    }

    public function init()
    {

      if( isset($_POST['rb_custom_form']) )
      {
        global $wpdb;

        $table_name = $wpdb->prefix . "school";


        $wpdb->insert(
                $table_name, //table
                array('name' => $_POST['name'])
        );

        wp_redirect( home_url( '/' ) );
        die;
      }


    }

    function shortcode_handler($atts)
    {
        return include('_form.php');
    }

}

$CustomForm = new CustomForm();
?>
