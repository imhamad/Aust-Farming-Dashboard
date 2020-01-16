<?php


/*
 * [box_job_categories] Dispays nicely styled grid of job categories with icons
 *
 */
add_action( 'init', 'ws_box_job_categories_integrateWithVC' );
function ws_box_job_categories_integrateWithVC() {
  $box_jobs_categories = array('None' => ' ');

  $job_listing_categories = get_terms( 'job_listing_category', 'orderby=count&hide_empty=0' );
  if ( is_array( $job_listing_categories ) && ! empty( $job_listing_categories ) ) {
    foreach ( $job_listing_categories as $job_listing_category ) {
        $box_jobs_categories[ $job_listing_category->name ] =  esc_attr($job_listing_category->term_id) ;
    }
  }
  vc_map( array(
    "name" => esc_html__("Job categories grid","workscout"),
    "base" => "box_job_categories",
    'icon' => 'workscout_icon',
    'description' => esc_html__( 'Grid with icons', 'workscout' ),
    "category" => esc_html__('WorkScout',"workscout"),
    "params" => array(
      
      array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__("Empty categories..", 'workscout'),
        "param_name" => "hide_empty",
        "value" => array(
         'Hide' => '1',     
         'Show' => '0',
        ),
        'save_always' => true,
        "description" => "Hides categories that doesn't have any jobs"
      ), 
      array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__("Show jobs counter", 'workscout'),
        "param_name" => "jobs_counter",
        "value" => array(
         'Enable' => 'yes',     
         'Disable' => 'no',
          ),
        'save_always' => true,
        "description" => "Show number of jobs assigned to this category"
      ), 
      // array(
      //   "type" => "dropdown",
      //   "class" => "",
      //   "heading" => esc_html__("Use flex layout on category boxes", 'workscout'),
      //   "param_name" => "flex_layout",
      //   "value" => array(
      //    'Enable' => 'yes',     
      //    'Disable' => 'no',
      //   ),
      //   'save_always' => true,
      //   "description" => ""
      // ),      
      array(
        "type" => "dropdown",
        "class" => "",
        "heading" => esc_html__("Layout of category boxes", 'workscout'),
        "param_name" => "layout",
        "value" => array(
         'Boxed (new)' => 'boxed',     
         'Old classic' => 'classic',     
         'Old flex' => 'flex',
        ),
        'save_always' => true,
        "description" => ""
      ),



      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Order by', 'workscout' ),
        'param_name' => 'orderby',
        'value' => array(
          esc_html__( 'Name', 'workscout' ) => 'name',
          esc_html__( 'ID', 'workscout' ) => 'ID',
          esc_html__( 'Count', 'workscout' ) => 'count',
          esc_html__( 'Slug', 'workscout' ) => 'slug',
          esc_html__( 'None', 'workscout' ) => 'none',
          ),
         'save_always' => true,
        ),

      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Order', 'workscout' ),
        'param_name' => 'order',
        'value' => array(
          esc_html__( 'Descending', 'workscout' ) => 'DESC',
          esc_html__( 'Ascending', 'workscout' ) => 'ASC'
          ),
         'save_always' => true,
      ),

       array(
        'type' => 'textfield',
        'heading' => esc_html__( 'Total items', 'workscout' ),
        'param_name' => 'number',
        'value' => 10, // default value
        'description' => esc_html__( 'Set max limit for items in grid or enter -1 to display all (limited to 1000).', 'workscout' ),
      ),

      array(
        'type' => 'checkbox',
        'heading' => esc_html__( '"Browse categories" button', 'workscout' ),
        'param_name' => 'browse_link',
        'description' => esc_html__( 'If checked the button will be added to the end of the grid.', 'workscout' ),
        'value' => array( esc_html__( 'Yes', 'workscout' ) => 'yes' )
      ),

      array(
        'type' => 'autocomplete',
        'heading' => esc_html__( 'Include only', 'workscout' ),
        'param_name' => 'include',
        'description' => esc_html__( 'Add job categories.', 'workscout' ),
        'settings' => array(
            'multiple' => true,
            'sortable' => true,
          ),
        ),      
      array(
        'type' => 'autocomplete',
        'heading' => esc_html__( 'Exclude only', 'workscout' ),
        'param_name' => 'exclude',
        'description' => esc_html__( 'Add job categories.', 'workscout' ),
        'settings' => array(
            'multiple' => true,
            'sortable' => true,
          ),
        ),

      array(
        'type' => 'dropdown',
        'heading' => esc_html__( 'Child of', 'workscout' ),
        'param_name' => 'child_of',
        'value' => $box_jobs_categories,
      ),
    )
  ));
}

add_filter( 'vc_autocomplete_box_job_categories_include_callback',
  'vc_include_job_categories_search', 10, 1 ); // Get suggestion(find). Must return an array

 add_filter( 'vc_autocomplete_box_job_categories_include_render',
  'vc_include_job_categories_render', 10, 1 ); // Render exact product. Must return an array (label,value)

add_filter( 'vc_autocomplete_box_job_categories_exclude_callback',
  'vc_include_job_categories_search', 10, 1 ); // Get suggestion(find). Must return an array

 add_filter( 'vc_autocomplete_box_job_categories_exclude_render',
  'vc_include_job_categories_render', 10, 1 ); // Render exact product. Must return an array (label,value)

?>