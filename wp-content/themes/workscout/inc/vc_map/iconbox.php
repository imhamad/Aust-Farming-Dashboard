<?php 
/*
 * Iconbox for Visual Composer
 *
 */
add_action( 'init', 'pp_iconbox_integrateWithVC' );
function pp_iconbox_integrateWithVC() {
  vc_map( array(
    "name" => esc_html__("Iconbox","workscout"),
    "base" => "iconbox",
    'icon' => 'workscout_icon',
    'description' => esc_html__( 'Iconbox', 'workscout' ),
    "category" => esc_html__('WorkScout',"workscout"),
    "params" => array(
        array(
          'type' => 'textfield',
          'heading' => esc_html__( 'Title', 'workscout' ),
          'param_name' => 'title',
          'description' => esc_html__( 'Enter text which will be used as title', 'workscout' )
          ),      

        array(
          'type' => 'textarea_html',
          'heading' => esc_html__( 'Content', 'workscout' ),
          'param_name' => 'content',
          'description' => esc_html__( 'Enter message content.', 'workscout' )
        ),
        array(
          'type' => 'vc_link',
          'heading' => esc_html__( 'URL', 'workscout' ),
          'param_name' => 'url',
          'description' => esc_html__( 'Iconbox link', 'workscout' ),
        ),      
        array(
          'type' => 'iconpicker',
          'heading' => esc_html__( 'Icon', 'workscout' ),
          'param_name' => 'icon',
            'settings' => array(
              'type' => 'iconsmind',
              'emptyIcon' => false,
              'iconsPerPage' => 50
              ),
          'description' => esc_html__( 'Icon', 'workscout' ),
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'Type', 'workscout' ),
          'param_name' => 'type',
          'description' => esc_html__( 'Choose style', 'workscout' ),
          'value' => array(
            'Rounded' => 'rounded',
            'Standard' => 'standard',
            ),
          'std' => 'standard',
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