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
   

    // Content Tab start here

    protected function register_controls()
    {
        $this-> start_controls_section(
            'section_title',
            [
                'label'=> esc_html__( 'Title', 'techitdev' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this-> add_control(
            'title',
            [
                'label'=> esc_html__( 'Title', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::TEXTAREA,
                'default'=>  esc_html__( 'John Doe', 'techitdev' ),
            ]
        );
        $this-> add_control(
            'description',
            [
                'label'=> esc_html__( 'Description', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::TEXTAREA,
                'default'=> esc_html__( 'Card Description', 'techitdev')
            ]
        );

        $this->end_controls_section();
        // Content Tab Ends




        // Title Style tab start
        $this-> start_controls_section(
            'section_title_style',
            [
                'label'=> esc_html__( 'Title', 'techitdev' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,           
            ]
        );
        $this-> add_control(
            'title_option',
            [
                'label'=> esc_html__( 'Title Options', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before'
            ]
        );



        $this->add_control(
            'title_color',
            [
                'label'=> esc_html__( 'Text Color', 'techitdev'),
                'type'=> \Elementor\Controls_Manager::COLOR,
                'selectors'=> [
                    '{{WRAPPER}}  h3' => 'color: {{VALUE}}'
                ]
            ]
        );
        $this-> add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'=> 'title_typography',
                'selector'=> '{{WRAPPER }} h3'
            ]
        );
        $this-> add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'=> 'title_background',
                'selector'=> '{{WRAPPER}} h3'
            ]
        );
        $this-> add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name'=> 'title_border',
                'selector'=> '{{WRAPPER}} h3'
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name'=> 'title_box_shadow',
                'selector'=> '{{WRAPPER}} h3'
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Css_Filter::get_type(),
            [
                'name'=> 'title_CSS',
                'selector'=> '{{WRAPPER}} h3'
            ]
        );
        $this-> add_group_control(
            \Elementor\Group_Control_Flex_Item::get_type(),
            [
                'name'=> 'title_felx_item',
                'selector'=> '{{WRAPPER}} h3'
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Flex_Container::get_type(),
            [
                'name'=> 'title_flex_container',
                'selector'=> '{{WRAPPER}} h3'
            ]
        );
        $this->end_controls_section();



        // Description Style tab start

        $this-> start_controls_section(
            'description_style',
            [
                'label'=> esc_html__( 'Decsription', 'techitdev' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE,           
            ]
        );
    
        $this-> add_control(
            'description_options',
            [
                'label'=> esc_html__( 'Description Options', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before'
            ]
        );


        $this->add_control(
            'description_color',
            [
                'label'=> esc_html__( 'Descrioption Color', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::COLOR,
                'selectors'=> [
                    '{{WRAPPER}} .card__descriptions' => 'color: {{VALUE}}'
                ]
            ]
        );
        $this-> add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'=> 'descriptopn_typogaphy',
                'selector'=> '{{WRAPPER}} .card__descriptions'
            ]
        );
      
    }


    protected function render()
    {
        $settings= $this->get_settings_for_display();

        ?>
        <h3 class="card-title">
          <?php echo $settings['title'];?>
        </h3>
        <p class="card__descriptions">
          <?php echo $settings['description'];?>
        </p>
        <?php
    }
}