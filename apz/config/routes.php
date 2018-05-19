<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['logout'] = 'home/logout';

//Login
$route['login'] = 'user/view/login';
$route['sudo'] = 'admin/view/login';
$route['sudo/log'] = 'admin/actionLogin';
//Register
$route['register'] = 'user/view/register';

//Dashboard
$route['dashboard'] = 'user/view/dashboard';
$route['dashboard/now'] = 'user/now';
$route['dashboard/own'] = 'user/own';
$route['dashboard/add'] = 'user/addProject';
$route['dash-admin'] = 'admin/mainMenu';

//Project
$route['project'] = 'project';
$route['project-detail/(:num)/(:any)'] = 'project/detailProject/$1/$2';

//Profile
$route['profile'] = 'user/profile';

//Shop
$route['shop'] = 'user/shop';//
$route['detailProduct/(:any)'] = 'product/detailProduct/$1';

//Product
$route['product/add'] = 'admin/addProduct';

//Verification
$route['verify/user'] = 'admin/mainMenu';
$route['verify/project'] = 'admin/verifProject';
$route['confirm/(:num)'] = 'admin/konfirmasi/$1';
$route['confirm_proyek/(:num)/(:any)'] = 'admin/konfirmasi_proyek/$1/$2';

//Term and Condition
$route['help'] = 'user/help';
$route['term'] = 'user/term';
$route['policy'] = 'user/policy';

//Logout
$route['logout'] = 'home/logout';

//Fungsi dulu, desain belakangan
$route['dashboard/daftar-volunteer'] = 'user/view/daftar_volunteer';
$route['dashboard/upload-project'] = 'user/view/upload_project';
