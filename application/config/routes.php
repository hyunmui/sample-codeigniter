<?php
defined('BASEPATH') || exit('No direct script access allowed');

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
$route['default_controller'] = 'Gallery';

# post
$route['[pP]osts/write/(:any)']['GET'] = 'posts/write/$1';
$route['[pP]osts/write/(:any)']['POST'] = 'posts/writeProcess/$1';
$route['[pP]osts/modify/(:num)']['GET'] = 'posts/modify/$1';
$route['[pP]osts/modify/(:num)']['POST'] = 'posts/modifyProcess/$1';
$route['[pP]osts/remove/(:num)']['POST'] = 'posts/remove/$1';
$route['[pP]osts/(:num)'] = 'posts/detail/$1';

# gallery
$route['[gG]all/(:any)/create']['GET'] = 'gallery/create/$1';
$route['[gG]all/(:any)/create']['POST'] = 'gallery/createProcess/$1';
$route['[gG]all/(:any)/update']['GET'] = 'gallery/update/$1';
$route['[gG]all/(:any)/update']['POST'] = 'gallery/updateProcess/$1';
$route['[gG]all/(:any)/remove']['GET'] = 'gallery/remove/$1';
$route['[gG]all/(:any)/remove']['POST'] = 'gallery/removeProcess/$1';
$route['[gG]all/(:any)'] = 'gallery/page/$1';

# member
$route['[mM]ember/sign-in']['GET'] = 'member/signIn';
$route['[mM]ember/sign-in']['POST'] = 'member/signInProcess';
$route['[mM]ember/sign-out'] = 'member/signOut';
$route['[mM]ember/update']['GET'] = 'member/update';
$route['[mM]ember/update']['POST'] = 'member/updateProcess';
$route['[mM]ember/leave']['GET'] = 'member/leave';
$route['[mM]ember/leave']['POST'] = 'member/leaveProcess';
$route['[mM]ember/(:any)']['GET'] = 'member/detail/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
