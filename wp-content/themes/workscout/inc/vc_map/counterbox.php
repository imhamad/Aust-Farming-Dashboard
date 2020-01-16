<?php 
/*
 * Counter for Visual Composer
 *
 */

add_action( 'init', 'workscout_counterbox_integrateWithVC' );
function workscout_counterbox_integrateWithVC() {
  vc_map( array(
    "name" => esc_html__("Counters wraper", "workscout"),
    "base" => "counters",
    "as_parent" => array('only' => 'counter'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "category" => esc_html__('WorkScout', 'workscout'),
    'icon' => 'workscout_icon',
    "show_settings_on_create" => false,
    "params" => array(
        // add params same as with any other content element
      array(
        "type" => "textfield",
        "heading" => esc_html__("Extra class name", "workscout"),
        "param_name" => "el_class",
        "description" => esc_html__("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "workscout")
        ),
      array(
        'type' => 'from_vs_indicatior',
        'heading' => esc_html__( 'From Visual Composer', 'workscout' ),
        'param_name' => 'from_vs',
        'value' => 'yes',
        'save_always' => true,
        )
      ),
    "js_view" => 'VcColumnView'
    ));
  vc_map( array(
    "name" => esc_html__("Count up box", 'workscout'),
    "base" => "counter",
    'icon' => 'workscout_icon',
    'description' => esc_html__( 'Box with animated number\'s counting', 'workscout' ),
    "category" => esc_html__('WorkScout', 'workscout'),
    "params" => array(
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Title', 'workscout' ),
        'param_name' => 'title',
        'description' => esc_html__( 'Enter text which will be used as title.', 'workscout' )
        ),
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Get automatic value of', 'workscout' ),
        'param_name' => 'type',
        'description' => esc_html__( 'Ignore the next "number" attribute if this is set to something else then "custom"', 'workscout' ),
        'value' => array(
           '' => 'custom',
          esc_html__('Jobs','workscout') => 'jobs',
          esc_html__('Resumes','workscout') => 'resumes',
          esc_html__('Posts','workscout') => 'posts',
          esc_html__('Members','workscout') => 'members',
          esc_html__('Candidates','workscout') => 'candidates',
          esc_html__('Employers','workscout') => 'employers',
          ),
        'save_always' => false,
      ),
      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Value', 'workscout' ),
        'param_name' => 'number',
        'description' => esc_html__( 'Only number (for example 2,147).', 'workscout' )
        ),      

      array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Scale', 'workscout' ),
        'param_name' => 'scale',
        'description' => esc_html__( 'Optional. For example %, degrees, k, etc.', 'workscout' )
        ),
      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Width of the box', 'workscout' ),
        'param_name' => 'width',
        'description' => esc_html__( 'Applicable if the element is a child of "counters" element', 'workscout' ),
        'value' => array(
          esc_html__('One-third','workscout') => 'one-third',
          esc_html__('Two','workscout') => 'two',
          esc_html__('Three','workscout') => 'three',
          esc_html__('Four','workscout') => 'four',
          ),
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

if ( class_exists( 'WPBakeryShortCodesContainer' ) ) {
    class WPBakeryShortCode_Counters extends WPBakeryShortCodesContainer {
    }
}
if ( class_exists( 'WPBakeryShortCode' ) ) {
    class WPBakeryShortCode_Counter extends WPBakeryShortCode {
    }
}
 ?>