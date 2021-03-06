<?php

/*
 * Iconbox for Visual Composer
 *
 */
add_action( 'init', 'pp_imagebox_integrateWithVC' );
function pp_imagebox_integrateWithVC() {

$categories =  get_terms( 'job_listing_region', array(
    'hide_empty' => false,
) );  
$options = array();
if ( ! empty( $categories ) && ! is_wp_error( $categories ) ){
  $options['Select region'] = '';
  foreach ($categories as $cat) {
    $options[$cat->name] = $cat->term_id;
  }
}

$job_type =  get_terms( 'job_listing_type', array(
    'hide_empty' => false,
) );	
$job_type_options = array();
if ( ! empty( $job_type ) && ! is_wp_error( $job_type ) ){
  $job_type_options['or select job type'] = '';
  foreach ($job_type as $feature) {
  	$job_type_options[$feature->name] = $feature->term_id;
  }
}
  vc_map( array(
    "name" => esc_html__("Imagebox","workscout"),
    "base" => "imagebox",
    'icon' => 'workscout_icon',
    'description' => esc_html__( 'Box displaying custom taxonomy', 'workscout' ),
    "category" => esc_html__('Workscout',"workscout"),
    "params" => array(
     
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'Region', 'workscout' ),
          'param_name' => 'category',
          'description' => esc_html__( 'Choose region', 'workscout' ),
          'value' => $options,
          'std' => '',
          'save_always' => true,
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'Or Job Type', 'workscout' ),
          'param_name' => 'job_type',
          
          'value' => $job_type_options,
          'std' => '',
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
          'type' => 'checkbox',
          'heading' => esc_html__( 'Add Featured badge?', 'workscout' ),
          'param_name' => 'featured',
          'save_always' => true,
        ),      
          
        array(
          'type' => 'checkbox',
          'heading' => esc_html__( 'Show counter?', 'workscout' ),
          'param_name' => 'show_counter',
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