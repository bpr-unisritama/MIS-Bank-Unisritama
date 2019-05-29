<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
// $route['default_controller'] = 'welcome';
$route['admin'] = 'admin/admin';
$route['admin/kategori'] = 'admin/admin/kategori';
$route['admin/type'] = 'admin/admin/type';
$route['admin/users'] = 'admin/admin/users';
$route['admin/lokasi'] = 'admin/lokasi';
$route['admin/add_lokasi'] = 'admin/lokasi/add_lokasi';
$route['admin/add_kategori'] = 'admin/admin/add_kategori';
$route['admin/add_type'] = 'admin/admin/add_type';
$route['admin/delete_type/(:num)'] = 'admin/admin/delete_type/$1';
$route['admin/delete_kategori/(:num)'] = 'admin/admin/delete_kategori/$1';
$route['admin/in_mail'] = 'admin/in_mail';
$route['admin/new_mail'] = 'admin/in_mail/new_mail';
$route['admin/detail/(:num)'] = 'admin/in_mail/detail/$1';
$route['admin/delete_suratm/(:num)'] = 'admin/in_mail/delete_suratm/$1';
$route['user'] = 'user/user';
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
