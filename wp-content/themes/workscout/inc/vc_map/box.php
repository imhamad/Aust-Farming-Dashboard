<?php 
add_action( 'init', 'workscout_box_integrateWithVC' );
function workscout_box_integrateWithVC() {

 vc_map( array(
  "name" => esc_html__("Notification box", 'workscout'),
  "base" => "box",
  'icon' => 'workscout_icon',
  "category" => esc_html__('WorkScout', 'workscout'),
  "params" => array(
    array(
      'type' => 'textarea_html',
      'heading' => esc_html__( 'Content', 'workscout' ),
      'param_name' => 'content',
      'description' => esc_html__( 'Enter message content.', 'workscout' )
      ),
    array(
      "type" => "dropdown",
      "class" => "",
      "heading" => esc_html__("Box type", 'workscout'),
      "param_name" => "type",
      'save_always' => true,
      "value" => array(
        'Error' => 'error',
        'Success' => 'success',
        'Warning' => 'warning',
        'Notice' => 'notice',
        ),
      "description" => ""
    )

    ),
/*    'custom_markup' => 'Type: %content% co to kurwa jest',
    'js_view' => 'VcWorkScoutMessageView'*/
));
}
 ?>