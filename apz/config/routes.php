<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Landing
$route['temp'] = 'welcome/temp';

//Login
$route['login'] = 'user/view';
$route['sudo'] = 'admin/view';

//register
$route['register'] = '';