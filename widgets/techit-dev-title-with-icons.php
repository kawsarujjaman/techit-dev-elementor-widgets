<?php

if ( !defined('ABSPATH')){
    exit;
}

class techitdev_second_widgets extends \Elementor\Widget_Base {
    public function get_name()
    {
        return 'card-with-icons';
    }
    public function get_title()
    {
        return esc_html__( 'Techit Dev Title with Icons', 'techitdev' );
    }
    public function get_icon()
    {
        return ' eicon-icon-box';
    }
    public function get_keywords()
    {
        return ['techitdev', 'title', 'card with icons'];
    }
    public function get_categories()
    {
        return ['basic'];
    }
    public function get_custom_help_url()
    {
        return 'https://techitdev.com';
    }   
   
}