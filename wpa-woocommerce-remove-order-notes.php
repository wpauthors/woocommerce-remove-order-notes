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
function wpa_remove_order_notes( $fields ) {
  unset($fields['order']['order_comments']);
  return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'wpa_remove_order_notes' );

function wpa_support_link_001( array $links ) {
  $support_link = 
  '<a style="color: green" href="https://wpauthors.com/pay-per-task?utm_source=free-pluginutm_medium=plugin-link&utm_campaign=get-support-plugin-link" target="_blank">' . __('Get WordPress Support', 'wpa-woocommerce-remove-order-notes') . '</a>';
    $links[] = $support_link;
  return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'wpa_support_link_001' );
