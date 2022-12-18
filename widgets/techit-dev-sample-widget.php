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

    protected function register_controls()
    {
        $this-> start_controls_section(
            'content_section',
            [
                'label'=> esc_html__( 'Section Content', 'techitdev' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT
            ]
        );

        $this->add_control(
            'price',
            [
                'label'=> esc_html__( 'Price', 'techitdev'),
                'type'=> \Elementor\Controls_Manager::NUMBER,
                'min'=> 5,
                'max'=> 100,
                // 'step'=> 1,
                'default'=> ''
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
            <span class="price"> <b>$</b> <?php echo $settings['price'];?> </span>
        <?php
    }
}