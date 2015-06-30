<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "users";
$route['/wishlists/show_item/(:any)'] = "/wishlists/show_item/$1";
$route['/wishlists/destroy/(:any)'] = "/wishlists/destroy/$1";
$route['/wishlists/update_wishlist/(:any)'] = "/wishlists/update_wishlist/$1";
$route['404_override'] = '';

//end of routes.php