<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';
$route['auth/login'] = 'error';
$route['auth/register'] = 'error';
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
