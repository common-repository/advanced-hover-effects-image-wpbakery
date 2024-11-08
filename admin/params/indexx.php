<?php
require_once 'switch/switch.php';
require_once 'slider/slider-params.php';

function __construct() {
    
vc_add_shortcode_param( 'hvc_notice', 'hvc_notice_filed_type' );
function hvc_notice_filed_type( $settings, $value ) {
   return '<div class="hvc_notice">
                
                <h1>Raju</h1>
                
            </div>';
    }

}

function mgt_separator_settings( $settings, $value ) {
    return '<div class="mgt_separator_block">'
    .'<input name="' . esc_attr( $settings['param_name'] ) . '" class="wpb_vc_param_value wpb-textinput ' .
    esc_attr( $settings['param_name'] ) . ' ' .
    esc_attr( $settings['type'] ) . '_field" type="hidden" value="' . esc_attr( $value ) . '" />' .
    '</div>'; // This is html markup that will be outputted in content elements edit form
}
// Separator element name for VC
function generate_separator_name() {

    global $separator_id;

    $separator_id++;

    return 'mgt_sep_'.$separator_id;
}