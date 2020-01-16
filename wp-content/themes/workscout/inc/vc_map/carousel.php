<?php 
add_action( 'init', 'clients_carousel_integrateWithVC' );
function clients_carousel_integrateWithVC() {

  vc_map( array(
    "name" => esc_html__("Client logos carousel", 'workscout'),
    "base" => "vc_clients_carousel",
    'icon' => 'workscout_icon',
    'description' => esc_html__( 'Carousel with logos', 'workscout' ),
    "category" => esc_html__('WorkScout', 'workscout'),
    "params" => array(
     array(
      'type' => 'attach_images',
      'heading' => esc_html__( 'Clients logos', 'workscout' ),
      'param_name' => 'logos',
      'value' => '',
      'description' => esc_html__( 'Select images from media library.', 'workscout' )
      ),
     array(
      'type' => 'from_vs_indicatior',
      'heading' => esc_html__( 'From Visual Composer', 'workscout' ),
      'param_name' => 'from_vs',
      'value' => 'yes',
      'save_always' => true,
      ),
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Auto play', 'workscout' ),
        'param_name' => 'autoplay',
        'value' => array(
          esc_html__( 'Off', 'workscout' ) => 'off',
          esc_html__( 'On', 'workscout' ) => 'on'
          ),
      ),    
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Delay', 'workscout' ),
        'param_name' => 'delay',
        'description' => esc_html__( 'Autoplay delay value', 'workscout' ),
        'value' => 5000
      ), 
     ),
    ));
}
 ?>