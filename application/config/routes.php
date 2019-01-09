<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['biodata/masuk'] = 'biodata/masuk';
$route['biodata/tampil'] = 'biodata/tampil';
$route['biodata/edit/(:any)'] = 'biodata/edit/$1';
$route['biodata'] = 'biodata';
$route['default_controller'] = 'biodata';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
