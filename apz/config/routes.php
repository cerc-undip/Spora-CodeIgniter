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
$route['dash-admin'] = 'admin/view/dashboard';

//Project
$route['proyek'] = 'project';
$route['detailProyek/(:any)'] = 'project/detailProyek/$1';

//Profile
$route['profile'] = 'user/profile';

//Term and Condition
$route['help'] = 'user/help';
$route['term'] = 'user/term';
$route['policy'] = 'user/policy';

//Logout
$route['logout'] = 'home/logout';


//Fungsi dulu, desain belakangan
//Kalo udah ada desain baru pindah keatas
$route['dashboard/upload-proyek'] = 'user/view/upload_proyek';
$route['dashboard/daftar-volunteer'] = 'user/view/daftar_volunteer';
