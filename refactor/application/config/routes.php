<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = 'site';
$route['404_override'] = 'site';

$route['latest'] = 'site/latest';
$route['popular'] = 'site/popular';
$route['staff-picks'] = 'site/staffpicks';
$route['directory'] = 'site/directory';

$route['favorites'] = 'site/favorites';
$route['settings'] = 'site/settings';

$route['join'] = 'site/join';
$route['login'] = 'site/login';
$route['logout'] = 'site/logout';
$route['submit'] = 'site/submit';
$route['admin'] = 'site/admin';
$route['edit/(:any)'] = 'site/edit/$1';

$route['channel/submit'] = 'channel/submit';
$route['channel/approve'] = 'channel/approve';
$route['channel/import'] = 'channel/import';
$route['channel/update'] = 'channel/update';
$route['channel/delete/(:any)'] = 'channel/delete/$1';

$route['song/delete/(:any)'] = 'song/delete/$1';
$route['song/favorite'] = 'song/favorite';

$route['channel/(:any)'] = 'site/channel/$1';
$route['song/(:any)'] = 'site/song/$1';

/* End of file routes.php */
/* Location: ./application/config/routes.php */