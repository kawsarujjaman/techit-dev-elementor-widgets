<?php
/**
 * 
 * Plugin Name: Techit Dev Elementor Widgets
 * Description: This is basic Elementor plugin. This plugin use for Title with Icons
 * Plugin URI: https://techitdev.com/techit-dev-elementor-widgets
 * Version: 1.0.0
 * Author: TechIT Dev
 * Author URI: https://techitdev.com
 * Text Domain: techitdev
 * Elementor tested up to: 3.5.0
 * Elementor Pro tested up to: 3.5.0
 * 
 * 
 */

 if( !defined( 'ABSPATH') ){
    exit; //Exit if accessed directly
 }

 /**
 * Register Widgets.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */

 function register_techit_dev_custom_widgets( $widgets_manager){
    require_once (__DIR__.'/widgets/techit-dev-widgets.php');
    require_once (__DIR__.'/widgets/techit-dev-title-with-icons.php');
    require_once(__DIR__).'/widgets/techit-dev-sample-widget.php';
    require_once(__DIR__).'/widgets/techit-dev-repeater_widget.php';

    $widgets_manager-> register(new \techitdev_card_widgets()); //Register the widget
    $widgets_manager-> register( new \techitdev_second_widgets());
    $widgets_manager->register(new \techit_dev_sample_widgets());
    $widgets_manager->register(new \techit_dev_repeater_wideget());
 }
 add_action( 'elementor/widgets/register', 'register_techit_dev_custom_widgets');

 /**
  * 
  * New custom category
  */

 function add_elementor_widget_categories( $elements_manager ){
   
   $elements_manager-> add_category(
       'techitdev', 
       [
           'title'=> esc_html__( 'TechIT dev', 'techitdev' ),
           'icon'=> 'fa fa plug',
       ]
   );
}

add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );