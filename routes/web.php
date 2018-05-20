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

Route::get('inventario','InventoryController@showInventory')->middleware('auth');

Route::get('iniciarVenta','NewSaleController@showNewSale')->middleware('auth');

Route::get('personalInfo','PersonalInfoController@showPersonalInfo')->middleware('auth');

Route::get('categorias','CategoryController@showCategory')->middleware('auth');

Route::get('productos','ProductController@showProduct')->middleware('auth');

Route::get('proveedores','SupplierController@showSupplier')->middleware('auth');

Route::get('venta','SaleController@showSale')->middleware('auth');

Route::get('reportes','ReportsController@showReports')->middleware('auth');

Route::get('reporteGenerado','GeneratedReportController@showReport')->middleware('auth');

Route::get('administrarUsuarios','ManageUsersController@showManagement')->middleware('auth');

Route::get('acercaDe','AboutController@showAbout')->middleware('auth');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
