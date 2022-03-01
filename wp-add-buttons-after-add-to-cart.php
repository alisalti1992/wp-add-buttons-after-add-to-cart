<?php
/**
 * Add Buttons After Add To Cart
 *
 * @package   wp-add-buttons-after-add-to-cart
 * @author    Move Ahead Media <ali@moveaheadmedia.co.uk>
 * @copyright 2022 Add Buttons After Add To Cart
 * @license   GPLv2
 * @link      https://github.com/moveaheadmedia/wp-add-buttons-after-add-to-cart/
 *
 * Plugin Name:     Add Buttons After Add To Cart
 * Plugin URI:      https://github.com/moveaheadmedia/wp-add-buttons-after-add-to-cart/
 * Description:     Adds buttons CTAs to your website after add to cart buttons, Require ACF Pro
 * Version:         0.0.1
 * Author:          Move Ahead Media
 * Author URI:      https://moveaheadmedia.com
 * Text Domain:     wp-add-buttons-after-add-to-cart
 * Requires PHP:    7.1
 * Requires WP:     5.5.0
 */

add_action('init', ['mam_wp_abaatc_add_option_page']);
add_action('init', ['mam_wp_abaatc_option_page_acf']);

function mam_wp_abaatc_add_option_page(){
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page([
            'page_title' => 'Add Buttons After Add To Cart',
            'menu_title' => 'Add Buttons After Add To Cart',
            'menu_slug' => 'wp-add-buttons-after-add-to-cart',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-buddicons-groups',
            'redirect' => false,
        ]);
    }
}

function mam_wp_abaatc_option_page_acf(){

}