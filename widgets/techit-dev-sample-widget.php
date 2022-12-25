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
        return ['techitdev'];   
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
        $this-> add_control(
            'show_price',
            [
                'label'=> esc_html__( 'Show Price', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::SWITCHER,
                'label_on'=> esc_html__( 'Show','techitdev' ),
                'label_off'=> esc_html__( 'Hide','techitdev' ),
                'return_value'=> 'yes',
                'default'=> 'yes',
            ]
        );
        $this-> add_control(
            'border_popover_toggle',
            [
                'label'=> esc_html__( 'Border', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::POPOVER_TOGGLE,
                'label_off'=> esc_html__( 'Default', 'techitdev'),
                'label_on'=> esc_html__( 'Custom', 'techitdev'),
                'return_value'=> 'yes',
                'default'=> 'yes',
            ]
        );
        $this->start_popover();
        $this->add_group_control(
          \Elementor\Group_Control_Border::get_type(),
          [
            'name'=> 'border',
            'selector'=> '{{WRAPPER}} .price',
          ]
        );
        $this->end_popover();
        

        $this->add_control(
            'item_description',
            [
                'label'=> esc_html__( 'Description', 'techitdev'),
                'type'=> \Elementor\Controls_Manager::WYSIWYG,
                'default'=> esc_html__( 'Default description', 'techitdev' ),
                'placeholder'=> esc_html__( 'Type your description here', 'techitdev' ),
                'separator'=> 'before',
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="">
                <?php 
                if( 'yes' === $settings['show_price'] ){
                    ?>
                    <span class="price"> <b>$</b> <?php echo $settings['price'];?> </span>
                    <?php
                };
                
                ?>
            
            <br>
            <span class="description">
                <?php echo $settings['item_description'];?>
            </span>
            </div>
        <?php
    }
}

