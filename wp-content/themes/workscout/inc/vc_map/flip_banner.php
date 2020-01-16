<?php

/*
 * Iconbox for Visual Composer
 *
 */
add_action( 'init', 'pp_flipbanner_integrateWithVC' );
function pp_flipbanner_integrateWithVC() {
  vc_map( array(
    "name" => esc_html__("Flip Banner","workscout"),
    "base" => "flip_banner",
    'icon' => 'workscout_icon',
    'description' => esc_html__( 'Banner with text on hover', 'workscout' ),
    "category" => esc_html__('Workscout',"workscout"),
    "params" => array(
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Visible text', 'workscout' ),
          'param_name' => 'text_visible',
          'description' => esc_html__( '', 'workscout' ),
          'save_always' => true,
          ),          
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Text displayed on hover', 'workscout' ),
          'param_name' => 'text_hidden',
          'description' => esc_html__( '', 'workscout' ),
          'save_always' => true,
          ),        
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Banner url', 'workscout' ),
          'param_name' => 'url',
          'description' => esc_html__( '', 'workscout' ),
          'save_always' => true,
          ),      
        array(
          'type' => 'attach_image',
          'heading' => esc_html__( 'Background image', 'sphene' ),
          'param_name' => 'background',
          'value' => '',
          'description' => esc_html__( 'Select image from media library.', 'sphene' )
        ),  
        array(
          'type' => 'colorpicker',
          'heading' => esc_html__( 'Overlay color', 'sphene' ),
          'param_name' => 'color',
          'value' => '#274abb',
          'description' => esc_html__( 'Select color.', 'sphene' )
        ),
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Opacity', 'sphene' ),
          'param_name' => 'opacity',
          'value' => '0.92', // default value
          'description' => '',
           'save_always' => true,
        ),      
        array(
          'type' => 'from_vs_indicatior',
          'heading' => esc_html__( 'From Visual Composer', 'workscout' ),
          'param_name' => 'from_vs',
          'value' => 'yes',
          'save_always' => true,
        )
    ),
  ));
}
?>