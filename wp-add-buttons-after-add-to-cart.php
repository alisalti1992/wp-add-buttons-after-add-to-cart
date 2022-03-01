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

function mam_abaatc_add_acf_menu_pages()
{
    acf_add_options_page(array(
        'page_title' => 'MAM',
        'menu_title' => 'MAM',
        'menu_slug' => 'mam',
        'capability' => 'manage_options',
        'position' => 61.1,
        'redirect' => true,
        'icon_url' => 'dashicons-cart',
        'update_button' => 'Save options',
        'updated_message' => 'Options saved',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Add Buttons After Add To Cart',
        'menu_title' => 'Add Buttons After Add To Cart',
        'parent_slug' => 'mam',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'MAM',
        'menu_title' => 'MAM',
        'parent_slug' => 'mam',
    ));
}


/**
 * Hook: acf/init.
 *
 * @uses add_action() https://developer.wordpress.org/reference/functions/add_action/
 * @uses acf/init https://www.advancedcustomfields.com/resources/acf-init/
 */
add_action('acf/init', 'mam_abaatc_add_acf_menu_pages');

function mam_abaatc_add_acf_fields(){
    if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_621d9787348aa',
            'title' => 'Cart Buttons',
            'fields' => array(
                array(
                    'key' => 'field_621d9794c1498',
                    'label' => 'Cart Buttons',
                    'name' => 'mam_abaatc_cart_buttons',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_621d97aec1499',
                            'label' => 'Text',
                            'name' => 'text',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_621d97b2c149a',
                            'label' => 'URL',
                            'name' => 'url',
                            'type' => 'url',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                        ),
                        array(
                            'key' => 'field_621d97bac149b',
                            'label' => 'Target',
                            'name' => 'target',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'choices' => array(
                                '_self' => '_self',
                                '_blank' => '_blank',
                                '_parent' => '_parent',
                                '_top' => '_top',
                            ),
                            'default_value' => false,
                            'allow_null' => 0,
                            'multiple' => 0,
                            'ui' => 0,
                            'return_format' => 'value',
                            'ajax' => 0,
                            'placeholder' => '',
                        ),
                    ),
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'acf-options-add-buttons-after-add-to-cart',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'show_in_rest' => 0,
        ));

    endif;
}
/**
 * Hook: acf/init.
 *
 * @uses add_action() https://developer.wordpress.org/reference/functions/add_action/
 * @uses acf/init https://www.advancedcustomfields.com/resources/acf-init/
 */
add_action('acf/init', 'mam_abaatc_add_acf_fields');