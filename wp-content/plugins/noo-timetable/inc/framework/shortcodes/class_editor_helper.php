<?php
/**
 * NOO Shortcodes Helper class.
  * 
 * @author      NooTheme
 * @category    Admin
 * @package     NooTimetable/Framework/Shortcodes
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// ajax call to get wp_editor
add_action( 'wp_ajax_wp_editor_box_editor_html', 'Noo__Timetable_Editor_Helper::editor_html' );
add_action( 'wp_ajax_nopriv_wp_editor_box_editor_html', 'Noo__Timetable_Editor_Helper::editor_html' );

// used to capture javascript settings generated by the editor
add_filter( 'tiny_mce_before_init', 'Noo__Timetable_Editor_Helper::tiny_mce_before_init', 10, 2 );
add_filter( 'quicktags_settings', 'Noo__Timetable_Editor_Helper::quicktags_settings', 10, 2 );

if ( !class_exists( 'Noo__Timetable_Editor_Helper' ) ) :

class Noo__Timetable_Editor_Helper {

    /*
    * Used to retrieve the javascript settings that the editor generates
    */

    private static $mce_settings = null;
    private static $qt_settings = null;

    public static function quicktags_settings( $qtInit, $editor_id ) {
        self::$qt_settings = $qtInit;
        return $qtInit;
    }

    public static function tiny_mce_before_init( $mceInit, $editor_id ) {
        self::$mce_settings = $mceInit;
        return $mceInit;
    }

    /*
    * Code coppied from _WP_Editors class (modified a little)
    */
    public static function get_qt_init($editor_id) {
        if ( !empty(self::$qt_settings) ) {
            $options = self::_parse_init( self::$qt_settings );
            $qtInit = "'$editor_id':{$options},";
            $qtInit = '{' . trim($qtInit, ',') . '}';
        } else {
            $qtInit = '{}';
        }
        return $qtInit;
    }

    public static function get_mce_init($editor_id) {
        if ( !empty(self::$mce_settings) ) {
            $options = self::_parse_init( self::$mce_settings );
            $mceInit = "'$editor_id':{$options},";
            $mceInit = '{' . trim($mceInit, ',') . '}';
        } else {
            $mceInit = '{}';
        }
        return $mceInit;
    }

    private static function _parse_init($init) {
        $options = '';

        foreach ( $init as $k => $v ) {
            if ( is_bool($v) ) {
                $val = $v ? 'true' : 'false';
                $options .= $k . ':' . $val . ',';
                continue;
            } elseif ( !empty($v) && is_string($v) && ( ('{' == $v{0} && '}' == $v{strlen($v) - 1}) || ('[' == $v{0} && ']' == $v{strlen($v) - 1}) || preg_match('/^\(?function ?\(/', $v) ) ) {
                $options .= $k . ':' . $v . ',';
                continue;
            }
            $options .= $k . ':"' . $v . '",';
        }

        return '{' . trim( $options, ' ,' ) . '}';
    }

}

endif;
