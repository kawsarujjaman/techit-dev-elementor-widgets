<?php

if( !defined( 'ABSPATH' )){
    exit;
}

class techit_dev_sample_widgets extends \Elementor\Widget_Base {
    public function get_name()
    {
        return 'sample-widgets';
    }
    public function get_title()
    {
        return esc_html__( 'Sample Widget', 'techitdev');
    }
    public function get_icon()
    {
        return 'eicon-parallax';
    }
    public function get_keywords()
    {
        return ['techitdev', 'sample', 'title'];
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