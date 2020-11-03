<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// admin pages
$route['admin'] = 'Admin/index';
$route['admin/post-job'] = 'Jobs/new';
$route['admin/jobs'] = 'Jobs/view_jobs';
$route['admin/messages'] = 'Admin/messages';
$route['admin/job_candidates'] = 'Admin/job_candidates';
$route['admin/settings'] = 'Admin/settings';
$route['user/edit_profile'] = 'Users/edit_profile';
$route['user/change_password'] = 'Users/change_password';


// Front pages
$route['admin/employer-listing'] = 'Front/employer_listing';
$route['employer-details'] = 'Front/employer_details';
$route['candidate-listing'] = 'Front/candidate_listing';
$route['candidate-details'] = 'Front/candidate_details';
$route['add-resume'] = 'Jobs/add_resume';
$route['users'] = 'Users/index';
$route['jobs'] = 'Jobs/all';
$route['about'] = 'Front/about';
$route['contact'] = 'Front/contact';
$route['signup'] = 'Users/index/signup';
$route['login'] = 'Users/index/login';
$route['view_job/(:num)'] = 'Jobs/view_job/$1';
