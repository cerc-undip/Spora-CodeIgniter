<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//LOGIN
$route['login/(:any)'] = 'login/view/$1';
$route['login/login'] = 'login/login';