<?php

if( !defined( 'ABSPATH' )){
    exit;
}

class techit_dev_repeater_wideget extends \Elementor\Widget_Base {
    public function get_name()
    {
        return 'repeater-widgets';
    }
    public function get_title()
    {
        return esc_html__( 'Repeater Widget', 'techitdev');
    }
    public function get_icon()
    {
        return 'eicon-heart';
    }
    public function get_keywords()
    {
        return ['techitdev', 'repeater', 'title'];
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
            'list',
            [
                'label'=> esc_html__( 'Repeater List', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::REPEATER,
                'fields'=> [
                    [
                    'name'=> 'list_title',
                    'label'=> esc_html__( 'Title', 'techitdev' ),
                    'type'=> \Elementor\Controls_Manager::TEXT,
                    'default'=> esc_html__( 'List Title', 'techitdev' ),
                    'label_block'=> true,
                ],
                [ 
                    'name'=> 'list_content',
                    'label'=> esc_html__( 'Content', 'techitdev' ),
                    'type'=> \Elementor\Controls_Manager::WYSIWYG,
                    'defaulr'=> esc_html__( 'List Content', 'techitdev' ),
                    'show_label'=> false
                ],
                [
                    'name'=> 'list_color',
                    'label'=> esc_html__( 'Color', 'techitdev' ),
                    'type'=> \Elementor\Controls_Manager::COLOR,
                    'selectors'=> [
                        '{{WRAPPER}} {{CURRENT_ITEM}}'=> 'color: {{VALUE}}'
                    ],
                ]

            ],
            'default'=> [
                [
                    'list_title'=> esc_html__( 'Title #1', 'techitdev' ),
                    'list_content'=> esc_html__( 'Item Content, Click the edit button to change this text', 'techitdev' ),
                ],
                [
                    'list_title'=> esc_html__( 'Title #1', 'techitdev' ),
                    'list_content'=> esc_html__( 'Item Content, Click the edit button to change this text', 'techitdev' ),
                ],
            ],
            'title_field'=> '{{{list_title}}}',
        ]

        );
    
        $this->add_control(
            'entrance_animation',
            [
                'label'=> esc_html__( 'Entrance Animation', 'techitdev'),
                'type'=> \Elementor\Controls_Manager::ANIMATION,
                'prefix_class'=> 'animated '
            ]
        );
        $this-> add_control(
            'hover_animation',
            [
                'label'=> esc_html__( 'Hover Animation', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::HOVER_ANIMATION,
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="<?php echo esc_attr($settings['entrance_animation']) ;?>">
        <?php
        if( $settings['list']) {
            echo '<dl>';
            foreach ( $settings[ 'list' ] as $item ) {
                $elementClass = 'container-fluid';
                if( $settings['hover_animation']) {
                    $elementClass.=' elementor-animation-' . $settings['hover_animation'];
                }
                $this->add_render_attribute( 'wrapper', 'class', $elementClass );
                ?>
                <div <?php echo $this->get_render_attribute_string('wrapper'); ?>">
                   <?php 
                echo '<dt class="elementor-repeater-item-'.esc_attr( $item['_id'] ).'"> ' .$item['list_title']. ' </dt>';
                   
                   ?>                  
                </div>
                <?php

                // echo '<dt class="elementor-repeater-item-'.esc_attr( $item['_id'] ).'"> ' .$item['list_title']. ' </dt>';

                echo '<dd class="elementor-repeater-item"> '.$item['list_content'].' </dd>';
            }
            echo '</dl>';
        }

       ?>


        </div>
       
       <?php
    }
}

