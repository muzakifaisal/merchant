<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['kitchen'] = 'home/order';
//+++++++++++++++++ ADMIN +++++++++++++++++++++++
$route['administrator'] = 'admin';

$route['admin/merchant'] = 'managemerchant';
$route['admin/merchant/delete/(:any)'] = 'managemerchant/deleteMerchant/$1';

$route['admin/cashier'] = 'manageuser';
$route['admin/cashier/delete/(:any)'] = 'manageuser/deleteuser/$1';

$route['admin/tax'] = 'managetax';
$route['admin/tax/delete/(:any)'] = 'managetax/deletetax/$1';
//+++++++++++++++++ MERCHANT +++++++++++++++++++++++
$route['merchant']	= 'merchantController';
$route['merchant/menu']	= 'merchantController/managemenu';

//+++++++++++++++++ TAX +++++++++++++++++++++++

//+++++++++++++++++ CASHIER +++++++++++++++++++++++
$route['cashier'] = 'cashiercontroller';
