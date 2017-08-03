<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
// Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::get('/profile', 'ProfileController@index');

Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

Route::get('add','AddMoreController@create');
Route::post('add','AddMoreController@store');

Route::resource('invasive', 'InvasiveController');
Route::post('invasive/search', 'InvasiveController@search')->name('invasive.search');
Route::post('invasive/createdesc', 'InvasiveController@createdesc')->name('invasive.createdesc');
Route::post('invasive/createloc', 'InvasiveController@createloc')->name('invasive.createloc');

Route::resource('herbarium-management/weedherba', 'WeedHerbaController');
Route::post('herbarium-management/weedherba/search', 'WeedHerbaController@search')->name('weedherba.search');
Route::post('herbarium-management/weedherba/createnext', 'WeedHerbaController@createnext')->name('weedherba.createnext');
Route::post('herbarium-management/weedherba/create', 'WeedHerbaController@create')->name('weedherba.create');


Route::resource('herbarium-management/forestherba', 'ForestHerbaController');
Route::post('herbarium-management/forestherba/search', 'ForestHerbaController@search')->name('weedherba.search');
Route::post('herbarium-management/forestherba/createnext', 'ForestHerbaController@createnext')->name('forestherba.createnext');

Route::resource('system-management/department', 'DepartmentController');
Route::post('system-management/department/search', 'DepartmentController@search')->name('department.search');

Route::resource('system-management/division', 'DivisionController');
Route::post('system-management/division/search', 'DivisionController@search')->name('division.search');

Route::resource('system-management/country', 'CountryController');
Route::post('system-management/country/search', 'CountryController@search')->name('country.search');

Route::resource('system-management/state', 'StateController');
Route::post('system-management/state/search', 'StateController@search')->name('state.search');

Route::resource('system-management/city', 'CityController');
Route::post('system-management/city/search', 'CityController@search')->name('city.search');

Route::get('system-management/report', 'ReportController@index');
Route::post('system-management/report/search', 'ReportController@search')->name('report.search');
Route::post('system-management/report/excel', 'ReportController@exportExcel')->name('report.excel');
Route::post('system-management/report/pdf', 'ReportController@exportPDF')->name('report.pdf');

Route::get('avatars/{name}', 'EmployeeManagementController@load');
