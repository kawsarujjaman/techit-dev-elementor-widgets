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
        $this->add_control(
            'link',
            [
                'label'=> esc_html__( 'Link', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::URL, 
                'placeholder'=> esc_html__( 'Past a URL or type', 'techitdev' ),
                'options'=>['url','is_external', 'nofollow'],
                'default'=>
                [
                    'url'=> '',
                    'is_external'=> true,
                    'nofollow'=> true,
                    // 'custom_attributes'=> '',
                ]     ,
                'label_block'=> true,         
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
        $this->add_group_control(
            \Elementor\Group_Control_Text_Shadow::get_type(),
            [
                'name'=> 'title_Text_Shadow',
                'selector'=> '{{WRAPPER}} h3'
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Text_Stroke::get_type(),[
                'name'=> 'title_text_stroke',
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
      
        $this->end_controls_section();
        
        $this->start_controls_section(
            'image_section',
            [
                'label'=> esc_html__( 'Image','techitdev' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT
            ]
        );
         $this-> add_control(
            'image',
            [
                'label'=> esc_html__( 'Choose Image','techitdev' ),
                'type'=> \Elementor\Controls_Manager::MEDIA,
                'default'=> [
                    'url'=> \Elementor\Utils::get_placeholder_image_src(),
                ]
            ]
        );
        $this-> add_group_control(
            \Elementor\Group_Control_Image_Size::get_type(),
            [
                'name'=> 'image',
                'default'=> 'large',
                'separator'=> 'none'
            ]
        );

    }


    protected function render()
    {
        $settings= $this->get_settings_for_display();

        ?>
        <?php 
            if( !empty( $settings['link']['url'])){
                $this->add_link_attributes('link', $settings['link']);
            }        
        ?> 

        <h3 class="card-title">
            <a <?php echo $this->get_render_attribute_string('link');?>>    <?php echo $settings['title'];?>  </a>
        </h3>

        <p class="card__descriptions">
          <?php echo $settings['description'];?>
        </p>

        <!-- Get Image URL -->
        <!-- <div class="techit-dev-image m-auto text-center">
            <img class="techitdev-image w-25 m-auto rounded-xl " src="<?php echo esc_url($settings['image']['url']);?>" alt="">
        </div> -->

        <!-- Get image by ID -->
        <div class="techit-dev-image w-25 m-auto text-center">
           <?php 
        //    echo wp_get_attachment_image( $settings['image']['id'], 'thumbnail');

        echo \Elementor\Group_Control_Image_Size::get_attachment_image_html($settings);
           
           
           ?>
        </div> 
        <?php
    }

    protected function content_template() {
		?>
		<h3>{{{ settings.title }}}</h3>
		<?php
	}
    
}