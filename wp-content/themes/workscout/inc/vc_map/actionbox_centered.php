<?php 
/*
 * [centered_headline] 
 *
 */
add_action( 'init', 'ws_centered_headline_integrateWithVC' );
function ws_centered_headline_integrateWithVC() {
  vc_map( array(
    "name" => esc_html__("Action Box Centered","workscout"),
    "base" => "centered_headline",
    'icon' => 'workscout_icon',
    'description' => esc_html__( '(Deprecated)', 'workscout' ),
    "category" => esc_html__('WorkScout',"workscout"),
    "params" => array(
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Wide version (use only on full-width page in full row', 'workscout' ),
        'param_name' => 'wide',
        'description' => esc_html__( 'Setting this to wide on page with sidebar or not in the maximum wide container will cause layout break.', 'workscout' ),
        'value' => array(
          esc_html__( 'Standard', 'workscout' ) => 'false',
          esc_html__( 'Wide', 'workscout' ) => 'true',
          ),
        'save_always' => true,
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'workscout' ),
        'param_name' => 'title',
        'value' => 'Start Building Your Own Job Board Now ', // default value
        'description' => '',
      ),      
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Subtitle', 'workscout' ),
        'param_name' => 'subtitle',
        'description' => ''
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'URL', 'workscout' ),
        'param_name' => 'url',
        'description' => esc_html__( 'Where it will link.', 'workscout' )
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