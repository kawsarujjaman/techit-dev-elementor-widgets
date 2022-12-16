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
                'lebel'=> esc_html__( 'Title', 'techitdev' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this-> add_control(
            'title',
            [
                'label'=> esc_html__( 'Title', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::TEXTAREA,
                'default'=>  esc_html__( 'John Doe', 'techitdev' )
            ]
        );

        $this->end_controls_section();


    }


    protected function render()
    {
        $settings= $this->get_settings_for_display();

        ?>
        <h3 class="card-title">
          <?php echo $settings['title'];?>
        </h3>
        <p class="card__descriptions">
          <!-- <?php echo $settings['description'];?> -->
        </p>
        <?php
    }
}