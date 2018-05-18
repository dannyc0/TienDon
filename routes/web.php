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

Route::get('/home','DashboardController@showDashboard');

Route::get('inventario','InventoryController@showInventory');

Route::get('iniciarVenta','NewSaleController@showNewSale');

Route::get('personalInfo','PersonalInfoController@showPersonalInfo');

Route::get('categorias','CategoryController@showCategory');

Route::get('productos','ProductController@showProduct');

Route::get('proveedores','SupplierController@showSupplier');

Route::get('venta','SaleController@showSale');

Route::get('reportes','ReportsController@showReports');

Route::get('administrarUsuarios','ManageUsersController@showManagement');

Route::get('acercaDe','AboutController@showAbout');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
