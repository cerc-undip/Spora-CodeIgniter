<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['logout'] = 'home/logout';

//Login
$route['login'] = 'user/view/login';
$route['sudo'] = 'admin/view/login';

//Register
$route['register'] = 'user/view/register';

//Dashboard
$route['dashboard'] = 'user/view/dashboard';
$route['help'] = 'user/help';
$route['term'] = 'user/term';
$route['policy'] = 'user/policy';
$route['dash-admin'] = 'admin/view/dashboard';

$route['proyek'] = 'project';

//Logout
$route['logout'] = 'home/logout';

