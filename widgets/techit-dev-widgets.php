
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

    /**
	 * Get widget name.
	 *
	 * Retrieve Card widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */

class techitdev_card_widgets extends \Elementor\Widget_Base {
    public function get_name() {
        return 'card';
    }


    /**
	 * Get widget title.
	 *
	 * Retrieve Card widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
    public function get_title()
    {
        return esc_html__( 'Techitdev Card', 'techitdev');
    }


    /**
	 * Get widget icon.
	 *
	 * Retrieve Card widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
    public function get_icon()
    {
        return 'eicon-elementor-circle';
    }


    /**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */

    public function get_custom_help_url()
    {
        return 'https://techitdev.com';
    }

    /**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Card widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
    public function get_categories()
    {
        return ['basic'];
    }


    /**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the Card widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
    public function get_keywords()
    {
        return ['card', 'service', 'highlight', 'techitdev'];
    }


    /**
	 * Register Card widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
    protected function register_controls()
    {
        $this-> start_controls_section(
            'content_section',
            [
                'label' => esc_html__('content', 'techitdev' ),
                'tab'=> \Elementor\Controls_Manager::TAB_CONTENT
            ]
        );
        $this-> add_control(
            'card_title',
            [
                'label' => esc_html__('Card Title','techitdev'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'label_block'=> true,
                'placeholdar'=> esc_html__( 'Your card title here', 'techitdev' )
            ]
        );
        $this->add_control(
            'card_description',
            [
            'label' => esc_html__( 'Card Description', 'techitdev' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block'   => true,
            'placeholder' => esc_html__( 'Your card description here', 'techitdev' ),
            ]
        );

        $this->end_controls_section();



        // Style Controls
        $this-> start_controls_section(
            'section_style',
            [
                'label'=> esc_html__( 'Style', 'techitdev' ),
                'tab'=> \Elementor\Controls_Manager::TAB_STYLE
            ]
        );

        $this->add_control(
            'title_options', [
                'label'=> esc_html__( 'Title Options', 'techitdev' ),
                'type'=>  \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label'=> esc_html__( 'Title Color', 'techitdev' ),
                'type'=> \Elementor\Controls_Manager::COLOR,
                'default'=> '#f00',
                'selectors'=>[
                    '{{WRAPPER}} h3' => 'color:{{WRAPPER}}'
                ]
            ]
        );

          //    Typography option for Title 
        
          $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'=> 'title_typography',
                'selector'=> '{{WRAPPER}} h3'
            ]
        );


        // Options for descriptions
        $this->add_control(
            'description_options', [
                'label'=> esc_html__( 'Description Options', 'techitdev' ),
                'type'=>  \Elementor\Controls_Manager::HEADING,
                'separator'=> 'before',
            ]
        );
        $this-> add_control(
            'description_color',
            [
                'label'=> esc_html__('Color','techitdev'),
                'type'=> \Elementor\Controls_Manager::COLOR,
                'default'=> '#000',
                'selectors'=> [
                      '{{WRAPPER}} .card_description'=> ' color: {{WRAPPER}}'
                ],
            ]
        );

      // Typography option for description
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'=> 'description_typography',
                'selector'=> '{{WRAPPER}} .card_description'
            ]
        );

    }


    /**
	 * Render Card widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
    protected function render(){
        // Get the input from the eidget settings
        $settings = $this->get_settings_for_display();

        // Get the individual vaules of the input
        $card_title= $settings['card_title'];
        $card_description= $settings['card_description'];

        ?>
        <!-- Start rendering the output -->
        <div class="card">
            <h3 class="card-title">
                <?php echo $card_title; ?>
            </h3>
            <p class="card_description">  <?php echo $card_description;?> </p>
        </div>
         <!-- End rendering the output -->
        <?php
    }
}