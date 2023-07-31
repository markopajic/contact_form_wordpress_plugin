<?php

use Carbon_Fields\Field;
use Carbon_Fields\Container;


add_action('after_setup_theme', 'load_carbon_fields');
add_action('carbon_fields_register_fields', 'create_options_page');

function load_carbon_fields()
{
    \Carbon_Fields\Carbon_Fields::boot();
}

function create_options_page()
{
    Container::make( 'theme_options', __( 'Contact Form' ) )
    ->set_icon( 'dashicons-welcome-write-blog' )
    ->add_fields( array(

        Field::make( 'checkbox', 'contactform_plugin_active', __( 'Is Active' ) )
        ->set_option_value( 'yes' ),

        Field::make( 'text', 'contactform_plugin_recipients', __( 'Recipient Email' ) ) 
        ->set_attribute( 'placeholder', 'eg. youremail@email.com' ) 
        ->set_help_text( 'Email that form is submitted.' ),

        Field::make( 'textarea', 'contactform_plugin_message', __( 'Confirmation Message' ) ) 
        ->set_attribute( 'placeholder', 'Enter Confirmation Message' )
        ->set_help_text( 'Type the message you want the submitter to recieve.' ),

        Field::make( 'media_gallery', 'crb_media_gallery', __( 'Media Gallery' ) )
        ->set_help_text( 'Add media.' )
    ) );
}