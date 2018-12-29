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
    return view('welcome');
});

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admincp', 'namespace' => 'Admin'], function() {
	Route::get('/', function() {
		return view('admin.home');
	});
});

Route::group(['prefix' => 'admincp'], function () {
    Route::get('login', ['as' => 'getLogin', 'uses' => 'Admin\AdminLoginController@getLogin']);
	Route::post('login', ['as' => 'postLogin', 'uses' => 'Admin\AdminLoginController@postLogin']);
	Route::get('logout', ['as' => 'getLogout', 'uses' => 'Admin\AdminLoginController@getLogout']);

	Route::get('regency', ['as' => 'listRegency', 'uses' => 'Admin\RegencyController@listRegency']);
	Route::post('createRegency', 'Admin\RegencyController@createRegency');
	Route::get('editRegency/{id}', 'Admin\RegencyController@editRegency');
	Route::post('updateRegency', 'Admin\RegencyController@updateRegency');

	Route::get('department', ['as' => 'listDepartment', 'uses' => 'Admin\DepartmentController@listDepartment']);
	Route::post('createDepartment', 'Admin\DepartmentController@createDepartment');
	Route::get('editDepartment/{id}', 'Admin\DepartmentController@editDepartment');
	Route::post('updateDepartment', 'Admin\DepartmentController@updateDepartment');

	Route::get('typeEmployee', ['as' => 'listTypeEmployee', 'uses' => 'Admin\TypeEmployeeController@listTypeEmployee']);
	Route::post('createTypeEmployee', 'Admin\TypeEmployeeController@createTypeEmployee');
	Route::get('editTypeEmployee/{id}', 'Admin\TypeEmployeeController@editTypeEmployee');
	Route::post('updateTypeEmployee', 'Admin\TypeEmployeeController@updateTypeEmployee');

	Route::get('typeCustomer', ['as' => 'listTypeCustomer', 'uses' => 'Admin\TypeCustomerController@listTypeCustomer']);
	Route::post('createTypeCustomer', 'Admin\TypeCustomerController@createTypeCustomer');
	Route::get('editTypeCustomer/{id}', 'Admin\TypeCustomerController@editTypeCustomer');
	Route::post('updateTypeCustomer', 'Admin\TypeCustomerController@updateTypeCustomer');
});