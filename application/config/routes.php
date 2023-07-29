<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

/*URL Change '_' to '-' for wellcomecss.com*/
$route['code/text-color'] = 'code/text_color';
$route['code/text-decoration'] = 'code/text_decoration';
$route['code/text-align'] = 'code/text_align';
$route['code/background-color'] = 'code/background_color';
$route['code/grid-system'] = 'code/grid_system';
$route['code/title-box'] = 'code/title_box';
$route['code/message-box'] = 'code/message_box';
$route['code/radius-genatater'] = 'code/radius_genatater';
$route['code/gradient-generator'] = 'code/gradient_generator';
$route['code/image-effects'] = 'code/image_effects';
$route['code/hover-effects'] = 'code/hover_effects';
$route['code/progress-bar'] = 'code/progress_bar';
$route['code/list'] = 'code/list_';
$route['code/photo-gallery'] = 'code/photogallery';
$route['code/offset-fix'] = 'code/offset_fix';
$route['code/closeable-box'] = 'code/closeable_box';
$route['code/mobile-menu-left-overlay'] = 'code/mobile_menu_left_overlay';
$route['code/mobile-menu-right-overlay'] = 'code/mobile_menu_right_overlay';
$route['code/mp3-player'] = 'code/mp3_player';
$route['code/responsive-test-your-webpage'] = 'code/restest';





$route['default_controller'] = 'home';
$route['404_override'] = 'home/error';
$route['translate_uri_dashes'] = FALSE;
