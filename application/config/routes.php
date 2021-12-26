<?php
defined('BASEPATH') OR exit('No direct script access allowed');





// CRUD - Employee Data
// $route->get('employee','EmployeeController::index');
$route['emp'] = 'EmployeeController/index';
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
$route['default_controller'] = 'MainController/index';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

$route['home']['GET'] = 'MainController/index';
$route['about']['GET'] = 'MainController/about';
$route['blog_listing']['GET'] = 'MainController/blog_listing';
$route['blog_single']['GET'] = 'MainController/blog_single';
$route['index_2']['GET'] = 'MainController/index_2';
$route['index_3']['GET'] = 'MainController/index_3';
$route['blog_three_column']['GET'] = 'MainController/blog_three_column';
$route['blog_two_column']['GET'] = 'MainController/blog_two_column';
$route['borrow_account_saving']['GET'] = 'MainController/borrow_account_saving';
$route['car_loan']['GET'] = 'MainController/car_loan';
$route['card_landing_page']['GET'] = 'MainController/card_landing_page';
$route['compare_credit_card']['GET'] = 'MainController/compare_credit_card';
$route['compare_loan']['GET'] = 'MainController/compare_loan';
$route['compare_personal_loan']['GET'] = 'MainController/compare_personal_loan';
$route['compare_student_loan']['GET'] = 'MainController/compare_student_loan';
$route['contact']['GET'] = 'MainController/contact';
$route['contact']['POST'] = 'MainController/contact';
$route['credit_card_listing']['GET'] = 'MainController/credit_card_listing';
$route['credit_card_single']['GET'] = 'MainController/credit_card_single';
$route['education_loan']['GET'] = 'MainController/education_loan';
$route['error']['GET'] = 'MainController/error';
$route['faq']['GET'] = 'MainController/faq';
$route['forex_list_single']['GET'] = 'MainController/forex_list_single';
$route['forex_list']['GET'] = 'MainController/forex_list';
$route['gallery_filter_2']['GET'] = 'MainController/gallery_filter_2';
$route['gallery_filter_3']['GET'] = 'MainController/gallery_filter_3';
$route['gallery_masonary']['GET'] = 'MainController/gallery_masonary';
$route['gallery_zoom']['GET'] = 'MainController/gallery_zoom';
$route['home_loan']['GET'] = 'MainController/home_loan';
$route['index_4_student_loan']['GET'] = 'MainController/index_4_student_loan';
$route['index_4_student_loan']['POST'] = 'MainController/index_4_student_loan';
$route['index_5_business_loan']['GET'] = 'MainController/index_5_business_loan';
$route['index_6']['GET'] = 'MainController/index_6';
$route['index_7_borrow_bank']['GET'] = 'MainController/index_7_borrow_bank';
$route['index_compare_shop']['GET'] = 'MainController/index_compare_shop';
$route['index_creditcards']['GET'] = 'MainController/index_creditcards';
$route['index_creditscore']['GET'] = 'MainController/index_creditscore';
$route['index_forex']['GET'] = 'MainController/index_forex';
$route['landing_page_car_loan']['GET'] = 'MainController/landing_page_car_loan';
$route['landing_page_home_loan']['GET'] = 'MainController/landing_page_home_loan';
$route['lead_genrator_landing_page']['GET'] = 'MainController/lead_genrator_landing_page';
$route['lender_listing']['GET'] = 'MainController/lender_listing';
$route['lender_single']['GET'] = 'MainController/lender_single';
$route['loan_calculator']['GET'] = 'MainController/loan_calculator';
$route['loan_eligibility']['GET'] = 'MainController/loan_eligibility';
$route['loan_listing_icon']['GET'] = 'MainController/loan_listing_icon';
$route['loan_listing_image']['GET'] = 'MainController/loan_listing_image';
$route['personal_bank_account']['GET'] = 'MainController/personal_bank_account';
$route['personal_bank_saving']['GET'] = 'MainController/personal_bank_saving';
$route['personal_loan']['GET'] = 'MainController/personal_loan';
$route['refinancing_landing_page']['GET'] = 'MainController/refinancing_landing_page';
$route['shortcodes_accordion']['GET'] = 'MainController/shortcodes_accordion';
$route['shortcodes_alert']['GET'] = 'MainController/shortcodes_alert';
$route['shortcodes_button']['GET'] = 'MainController/shortcodes_button';
$route['shortcodes_tables']['GET'] = 'MainController/shortcodes_tables';
$route['shortcodes_tabs']['GET'] = 'MainController/shortcodes_tabs';
$route['signin_cover']['GET'] = 'MainController/signin_cover';
$route['signin_illustration']['GET'] = 'MainController/signin_illustration';
$route['signin']['GET'] = 'MainController/signin';
$route['team']['GET'] = 'MainController/team';
$route['testimonial']['GET'] = 'MainController/testimonial';

//Admin Route

$route['admin/contact_table']['GET'] = 'DashboardController/contact_table';
$route['admin/sidebar']['GET'] = 'DashboardController/sidebar';
$route['admin/lead_table']['GET'] = 'DashboardController/lead_table';
$route['admin/admin_register']['GET'] = 'DashboardController/admin_register';
$route['admin/admin_register']['POST'] = 'DashboardController/admin_register';
$route['admin/loginA']['GET'] = 'DashboardController/loginA';