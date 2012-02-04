<?php
/*
 * Plugin Name: Bits
 * Plugin URI: http://ifacethoughts.net/
 * Description: Creates custom post type called bits, to manage individual content pieces.
 * Version: 0.2
 * Author: Abhijit Nadgouda
 * Author URI: http://ifacethoughts.net/about/author/
 * License: GPLv2
 */

/*  Copyright 2012  Abhijit Nadgouda  (email: abhijit@ifacethoughts.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action( 'init', 'create_bits' );
function create_bits() {
    register_post_type(
        'bit',
        array(
            'labels' => array(
                'name' => __('Bits'),
                'singular_name' => __('Bit'),
            ),
            'public' => false,
            'publicly_queryable' => false,
            'exclude_from_search' => true,
            'show_ui' => true,
            'supports' => array(
                'title',
                'editor',
                'revisions'
            ),
            'has_archive' => false,
            'rewrite' => false,
            'can_export' => false,
            'show_in_nav_menus' => false,
        )
    );
}

function get_bit( $title ) {
    global $wpdb;

    $bit_content = $wpdb->get_var("SELECT post_content FROM $wpdb->posts WHERE post_title = '" . esc_attr($title) . "' AND post_type = 'bit'");

    return $bit_content;
}

function show_bit( $title ) {
    echo get_bit( $title );
}

function get_bit_shortcode( $atts, $content = null, $code = '' ) {
    extract( shortcode_atts( array(
        'title' => '',
    ), $atts ) );

    return get_bit($title);
}
add_shortcode( 'bit', 'get_bit_shortcode' );

?>
