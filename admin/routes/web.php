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
Route::get('/system-management/{option}', 'SystemMgmtController@index');
Route::get('/profile', 'ProfileController@index');
Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');
Route::resource('user-management', 'UserManagementController');

//Route::get('add','AddMoreController@create');
//Route::post('add','AddMoreController@store');


//IAS
Route::resource('invasive', 'InvasiveController');
Route::post('invasive/search', 'InvasiveController@search')->name('invasive.search');
Route::post('invasive/createdesc', 'InvasiveController@createdesc')->name('invasive.createdesc');
Route::post('invasive/createloc', 'InvasiveController@createloc')->name('invasive.createloc');

//WeedHerba
Route::resource('herbarium-management/weedherba', 'WeedHerbaController');
Route::post('herbarium-management/weedherba/search', 'WeedHerbaController@search')->name('weedherba.search');
Route::post('herbarium-management/weedherba/createnext', 'WeedHerbaController@createnext')->name('weedherba.createnext');
Route::post('herbarium-management/weedherba/create', 'WeedHerbaController@create')->name('weedherba.create');
Route::get('herbarium-management/weedherba/show', 'WeedHerbaController@show')-> name('weedherba.show');
Route::get('herbarium-management/weedherba/edit', 'WeedHerbaController@show')-> name('weedherba.edit');
Route::get('herbarium-management/weedherba/edit1', 'WeedHerbaController@show')-> name('weedherba.editnext');
Route::get('herbarium-management/weedherba/show-label', 'WeedHerbaController@showlabel')-> name('weedherba.showlabel');
Route::get('herbarium-management/weedherba/create/', 'WeedHerbaController@destination')->name('weedherba.destination');
Route::get('herbarium-management/weedherba/create/findDestination','WeedHerbaController@findDestination');

//ForestHerba
Route::resource('herbarium-management/forestherba', 'ForestHerbaController');
Route::post('herbarium-management/forestherba/search', 'ForestHerbaController@search')->name('weedherba.search');
Route::post('herbarium-management/forestherba/createnext', 'ForestHerbaController@createnext')->name('forestherba.createnext');

//LichenHerba
Route::resource('herbarium-management/lichenherba', 'LichenHerbaController');
Route::post('herbarium-management/lichenherba/search', 'LichenHerbaController@search')->name('lichenherba.search');
Route::post('herbarium-management/lichenherba/createnext', 'LichenHerbaController@createnext')->name('lichenherba.createnext');
Route::post('herbarium-management/lichenherba/create', 'LichenHerbaController@create')->name('lichenherba.create');
Route::get('herbarium-management/lichenherba/show', 'LichenHerbaController@show')-> name('lichenherba.show');


//BriovitasHerba
Route::resource('herbarium-management/briovitasherba', 'BrioHerbaController');
Route::post('herbarium-management/briovitasherba/search', 'BrioHerbaController@search')->name('brioherba.search');
Route::post('herbarium-management/briovitasherba/createnext', 'BrioHerbaController@createnext')->name('brioherba.createnext');
Route::post('herbarium-management/briovitasherba/create', 'BrioHerbaController@create')->name('brioherba.create');
//Route::get('herbarium-management/briovitasherba/show', 'BrioHerbaController@show')-> name('brioherba.show');


//View weedherba
Route::resource('view-weedherba', 'WeedViewController');
Route::post('view-weedherba/index', 'WeedViewController@index')->name('dashboard_view.weedView');
Route::post('view-weedherba/search', 'WeedViewController@search')->name('dashboard_view.search');


//View forestherba
Route::resource('view-forestherba', 'ForestViewController');
Route::post('view-forestherba/index', 'ForestViewController@index')->name('dashboard_view.ForestView');
Route::post('view-forestherba/search', 'ForestViewController@search')->name('dashboard_view.search');


//VIew lichenherba
Route::resource('view-lichenherba', 'LichenViewController');
Route::post('view-lichenherba/index', 'LichenViewController@index')->name('dashboard_view.LichenView');
Route::post('view-lichenherba/search', 'LichenViewController@search')->name('dashboard_view.search');

//VIew Brioherba
Route::resource('view-brioherba', 'BrioViewController');
Route::post('view-brioherba/index', 'BrioViewController@index')->name('dashboard_view.BrioView');
Route::post('view-brioherba/search', 'BrioViewController@search')->name('dashboard_view.search');

//VIew IASherba
Route::resource('view-invasive', 'InvasiveViewController');
Route::post('view-invasive/index', 'InvasiveViewController@index')->name('dashboard_view.invasiveView');
Route::post('view-invasive/search', 'InvasiveViewController@search')->name('dashboard_view.search');

/*
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
*/
Route::get('avatars/{name}', 'EmployeeManagementController@load');

