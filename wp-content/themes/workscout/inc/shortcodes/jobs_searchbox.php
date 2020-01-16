<?php 

 function workscout_jobs_searchbox($atts, $content ) {

      extract(shortcode_atts(array(
           
            'full_width'    => 'no',
            'show_jobs'     => 'yes',
            'from_vs'       => 'no',
        ), $atts));
/**/
         ob_start();

        if($full_width == 'yes') {
            if($from_vs === 'yes') { ?>
                            </div> <!-- eof wpb_wrapper -->
                        </div> <!-- eof vc_column-inner -->
                    </div> <!-- eof vc_column_container -->
                </div> <!-- eof vc_row-fluid -->
            </article>
        </div> <!-- eof container -->
        <?php 
            } else { ?>
             </article>
        </div>
        <?php }
        } ?>
        
<div id="banner" <?php echo workscout_get_search_header();?>  class="workscout-search-banner jobs-search-banner <?php if( $fancy_header ) { ?> with-transparent-header parallax background <?php } ?>" >
    <div class="container">
        <div class="sixteen columns">
            
            <div class="search-container sc-jobs">

                <!-- Form -->
                <h2><?php echo Kirki::get_option( 'workscout','pp_jobs_home_title','Find Job');  ?></h2>
                <?php 
                $search_elements = Kirki::get_option( 'workscout', 'pp_job_search_elements',array('keywords','location')); 
                $el_nr = count($search_elements); ?>
                <form method="GET" class="inputs-number-<?php echo esc_attr($el_nr); ?>" action="<?php echo get_permalink(get_option('job_manager_jobs_page_id')); ?>">

                    
                    <?php if (in_array("keywords", $search_elements)) : ?>
                    <input type="text" id="search_keywords" name="search_keywords"  class="ico-01" placeholder="<?php 
                    (  $el_nr == 3 ) ? esc_attr_e('keywords','workscout') : esc_attr_e('job title, keywords or company name','workscout'); ?>" value=""/>
                    <?php endif; ?>
                    
                    <?php if (in_array("location", $search_elements)) : ?>
                    <?php if ( get_option( 'job_manager_regions_filter' ) || is_tax( 'job_listing_region' ) ) {  ?>
                        <?php
                        $dropdown = wp_dropdown_categories( array(
                            'show_option_all'           => __( 'All Regions', 'wp-job-manager-locations' ),
                            'hierarchical'              => true,
                            'orderby'                   => 'name',
                            'taxonomy'                  => 'job_listing_region',
                            'name'                      => 'search_region',
                            'id'                        => 'search_location',
                            'class'                     => 'search_region job-manager-category-dropdown chosen-select-deselect ' . ( is_rtl() ? 'chosen-rtl' : '' ),
                            'hide_empty'                => 0,
                            'selected'                  => isset( $_GET[ 'search_region' ] ) ? $_GET[ 'search_region' ] : '',
                            'echo'                      => false,
                        )  );
                        $fixed_dropdown = str_replace("&nbsp;", "", $dropdown); echo $fixed_dropdown;
                    } else { ?>
                    <input type="text" id="search_location" name="search_location" class="ico-02" placeholder="<?php esc_attr_e('city, province or region','workscout'); ?>" value=""/> 
                    <?php } ?>
                    <?php endif; ?>

                    <?php 
                        if (in_array("category", $search_elements)) :                
                            wp_dropdown_categories( 
                                array(
                                    'taxonomy'          => 'job_listing_category',
                                    'name'              => 'search_category',
                                    'class'             => 'chosen-select',
                                    'hierarchical'      => true,
                                    'show_option_all'   => __('All categories','workscout')
                                    )
                                );
                        endif;
                    ?>
                   
                    <button><i class="fa fa-search"></i></button>

                </form>
                <!-- Browse Jobs -->
                <div class="browse-jobs">
                    <?php 
                    if(Kirki::get_option( 'workscout','pp_categories_page')){
                        $categoriespage = Kirki::get_option( 'workscout','pp_categories_page');
                    } elseif (ot_get_option('pp_categories_page')){
                        $categoriespage = ot_get_option('pp_categories_page'); 
                    }

                    if(!empty($categoriespage)) { 
                        printf( __( ' Or browse job offers by <a href="%s">category</a>', 'workscout' ), get_permalink($categoriespage) );
                    } ?>
                </div>
                
                <?php 
                if(Kirki::get_option( 'workscout','pp_home_job_counter')) { ?>
                <!-- Announce -->
                <div class="announce">
                    <?php $count_jobs = wp_count_posts( 'job_listing', 'readable' ); 
                    printf( esc_html__( 'We have %s job offers for you!', 'workscout' ), '<strong>' . $count_jobs->publish . '</strong>' ) ?>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div> 
       <?php 


    if($full_width == 'yes') {
       if($from_vs === 'yes') { ?>
              
    <div class="container">
        <article class="sixteen columns">
             <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
        <?php } else { ?>
            <div class="container">
                <article class="sixteen columns">
        <?php  }
    }
       $output =  ob_get_clean() ;
       return  $output ;
    }?>