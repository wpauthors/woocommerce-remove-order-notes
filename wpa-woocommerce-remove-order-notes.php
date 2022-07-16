<?php
/*
Plugin Name:  WooCommerce remove order notes
Plugin URI:   https://wpauthors.com/blog/?p=3173
Description:  Small WooCommerce plugin tto remove order notes fields at the checkout
Version:      1.0
Author:       WPAuthors 
Author URI:   https://wpauthors.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpa-woocommerce-remove-order-notes
*/


/* Removes Order Notes Title - Additional Information & Notes Field */
add_filter( 'woocommerce_enable_order_notes_field', '__return_false', 9999 );

/*
* Unset order comments from the array
* @param [array] $fields
* @return [array]
*/
add_filter( 'woocommerce_checkout_fields' , 'wpa_remove_order_notes' );

function wpa_remove_order_notes( $fields ) {
     unset($fields['order']['order_comments']);
     return $fields;
}