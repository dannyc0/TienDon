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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/','LoginController@showLogin');

Route::get('/','Auth\LoginController@showLoginForm');

//Route::get('login','LoginController@showLogin');

Route::get('/home','DashboardController@showDashboard')->middleware('auth');

Route::resource('inventario','InventoryController')->middleware('auth');
Route::get('inventory/{id}', 'InventoryController@getAjaxData');

Route::get('iniciarVenta','NewSaleController@showNewSale')->middleware('auth');

Route::get('personalInfo','PersonalInfoController@showPersonalInfo')->middleware('auth');

Route::resource('categorias','CategoryController')->middleware('auth');
Route::get('category/{id}', 'CategoryController@getAjaxData');

Route::get('productos','ProductController@showProduct')->middleware('auth');

Route::get('proveedores','SupplierController@showSupplier')->middleware('auth');

Route::get('venta','SaleController@showSale')->middleware('auth');

Route::get('reportes','ReportsController@showReports')->middleware('auth');

Route::get('reporteGenerado','ReportsController@pdf')->name('reporteGenerado')->middleware('auth');

Route::get('reporteGeneradob','ReportsController@pdfCompra')->name('reporteGeneradob')->middleware('auth');

Route::get('reporteGeneradoc','ReportsController@pdfInv')->name('reporteGeneradoc')->middleware('auth');

//Route::get('reporteGenerado','GeneratedReportController@showReport')->middleware('auth');

Route::get('administrarUsuarios','ManageUsersController@showManagement')->middleware('auth');

Route::get('acercaDe','AboutController@showAbout')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
