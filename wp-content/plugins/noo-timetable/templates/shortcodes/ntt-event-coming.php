<?php
/**
 * Shortcode Noo Event Coming
 *
 * This template can be overridden by copying it to yourtheme/noo-timetable/shortcodes/ntt-event-coming.php.
 *
 * @author      NooTheme
 * @package     NooTimetable/Templates/Shortcodes
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if ( ! function_exists( 'shortcode_ntt_event_coming' ) ) :
	
	function shortcode_ntt_event_coming( $atts ) {

		extract( shortcode_atts( array(
            'title'             => '',
            'sub_title'         => '',
            'layout_style'      => 'grid',
            'autoplay'          => 'true',
            'columns'           => '4',
            'cat'               => 'all',
            'limit'             => '4',
            'filter_by_cat'     => '',
            'filter_by_organizer'   => '',
            'class'             => '',
            'class'             => '',
            'pagination'        => 'disable',
        ), $atts ) );

        ob_start();

        // 
        // Style Control Class
        // 
        $class = ($class != '') ? $class . ' ' : '';
        $class_layout = ($layout_style == 'grid') ? ' grid' : ' list';
        $class_shortcode = $class . 'noo-event-shortcode' . $class_layout;

        
        if ( $layout_style == 'slider' ) {
            $class_shortcode .= ' noo-data-slider';
        }

        //
        // Enqueue
        //
        if ( $layout_style == 'slider' ) {
            wp_enqueue_style('carousel');
            wp_enqueue_script('carousel');
        }else{
            wp_enqueue_script( 'isotope' );
            wp_enqueue_script( 'imagesloaded' );
            wp_enqueue_script('noo-event');
        }

        /**
         * Check paged
         */
        if (is_front_page() || is_home()) :
            $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
        else :
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        endif;

        $comming_event_ids = Noo__Timetable__Event::get_coming_event_ids();

        $args = array(
            'post_type'           => 'noo_event',
            'posts_per_page'      => $limit,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true,
            'meta_key'            => '_next_date',
            'orderby'             => 'meta_value_num',
            'order'               => 'ASC',
            'post__in'            => $comming_event_ids
        );

        if ( $pagination != 'disable' ) {
            $args['paged'] = $paged;
        }

        if ( !empty( $cat ) && $cat != 'all' ) {
            $args['tax_query'][]  = array(
                'taxonomy' =>  'event_category',
                'field'    =>  'id',
                'terms'    => explode(',', $cat),
            );
        }

        $args = apply_filters( 'noo_timetable_ntt_event_coming_query_args', $args );
        
        $query = new WP_Query( $args );

        if ( count($comming_event_ids) > 0 && $query->have_posts() ) :
        ?>
        <div class="<?php echo esc_attr( $class_shortcode ); ?>">

            <?php
                global $title_var;
                $title_var = compact('title', 'sub_title');
                noo_timetable_get_template( 'shortcodes/ntt-title.php' );
            ?>

            <!-- Section content -->

            <?php

            if ( $query->have_posts() ) :

                global $post_options;

                //
                // Class item masonry
                //
                
                $post_class = '';

                if ( $layout_style == 'list' ) {
                    $columns = 1;
                }

                if ( $layout_style != 'slider' ) {
                    $post_class = 'loadmore-item masonry-item noo-sm-6 noo-md-'.absint((12 / $columns));
                }

                $show_time_start = NOO_Settings()->get_option('noo_event_time_start', true);
                $show_time_end   = NOO_Settings()->get_option('noo_event_time_end', true);
                $show_address    = NOO_Settings()->get_option('noo_event_address', true);

                $post_options = compact('post_class', 'show_time_start', 'show_time_end', 'show_address');
                /*------ Event Filter ------*/
                $event_categories = get_terms('event_category',array('hide_empty'=>0));
                $event_organizers = get_posts(array('post_type'=>'event_organizers','posts_per_page'=>-1,'suppress_filters'=>0));
            ?>
                <?php if($filter_by_cat || $filter_by_organizer):?>
                    <h2 class="widget-tile"><?php echo esc_html_e('Event Filter')?></h2>
                <?php endif;?>
                <?php if($filter_by_cat && !empty($event_categories)):?>
                    <div class="widget-event-filter search-event-category" data-group="category">
                        <select class="widget-event-filter-control">
                            <option value=""><?php esc_html_e('Select Category','noo-timetable')?></option>
                            <?php foreach ((array)$event_categories as $category):?>
                                <option value="event_category-<?php echo esc_attr($category->slug)?>"><?php echo esc_html($category->name)?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                <?php endif;?>
                <?php if($filter_by_organizer && !empty($event_organizers)):
                ?>
                    <div class="widget-event-filter search-event-organizer" data-group="organizer">
                        <select class="widget-event-filter-control">
                            <option value=""><?php esc_html_e('Select Organizer','noo-timetable')?></option>
                            <?php foreach ((array)$event_organizers as $event_organizer):?>
                                <option value="filter-organizer-<?php echo esc_attr($event_organizer->ID)?>"><?php echo esc_html($event_organizer->post_title)?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                <?php endif;?>
                <div class="grid">
                    <div class="posts-loop-content noo-row <?php if ( $layout_style == 'slider' ) echo 'owl-carousel';?>">

                        <!-- <div class="masonry-container"> -->
                            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                            <?php noo_timetable_get_template( 'content-event.php' ); ?>

                            <?php endwhile;?>
                        <!-- </div> -->

                    </div> <!-- /.posts-loop-content -->
                </div>

                <?php if ( $layout_style == 'slider' ) :  ?>
                    
                    <script type="text/javascript">
                    jQuery(document).ready(function(){

                        jQuery('.noo-data-slider .posts-loop-content').each(function(){
                            jQuery(this).owlCarousel({
                                autoplay: <?php echo $autoplay = $autoplay == 'true' ? true : false ?>, //Set AutoPlay to 3 seconds
                                items : <?php echo absint( $columns ); ?>,
                                dots: true,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    500: {
                                        items: 2
                                    },
                                    991: {
                                        items: 2
                                    },
                                    1300: {
                                        items: <?php echo absint( $columns ); ?>
                                    }
                                },

                            });
                        });
                    });
                    </script>

                <?php endif; ?>

                <?php
                    if ( $pagination != 'disable' ) :
                        if ( function_exists('noo_timetable_pagination_normal') ):
                            noo_timetable_pagination_normal( array(), $query );
                        endif;
                    endif;
                ?>

            <?php
            endif; ?>
        </div> <!-- /.noo-trainer-shortcode -->
        <?php endif; ?>
        <?php
		$html = ob_get_contents();
        ob_end_clean();
        wp_reset_query();
        return $html;

	}

	add_shortcode( 'ntt_event_coming', 'shortcode_ntt_event_coming' );

endif;