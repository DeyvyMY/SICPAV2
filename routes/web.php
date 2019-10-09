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

use App\Http\Controllers\UnitMeasureController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/products', 'ProductocsController@index')->name('products');

//Rutas Ingresos
Route::get('/compras', 'ComprasController@index')->name('compras');
Route::get('/compras/notascreditorecibidas', 'NotasCreditoRecibidasController@index')->name('notascreditorecibidas');
Route::get('/compras/notasdebitorecibidas', 'NotasDebitoRecibidasController@index')->name('notasdebitorecibidas');
//Rutas Salidas
Route::get('/ventas', 'VentasController@index')->name('ventas');
Route::get('/ventas/notascreditoemitidas', 'NotasCreditoEmitidasController@index')->name('notascreditoemitidas');
Route::get('/ventas/notasdebitoemitidas', 'NotasDebitoEmitidasController@index')->name('notasdebitoemitidas');


//rutas producto
Route::get('/products', 'ProductsController@index')->name('productos');

Route::get('/categories', 'CategoriesController@index');
//Rutas Entidades
Route::get('/proveedores', 'ProveedorController@index');
Route::get('/proveedores/create', 'ProveedorController@create');
Route::get('/proveedores/delete', 'ProveedorController@delete');
Route::get('/clientes', 'ClienteController@index');
Route::get('/clientes/create', 'ClienteController@create');
Route::get('/clientes/delete', 'ClienteController@delete');



Route::resource('categories', 'CategoriesController');
Route::get('/unitmeasure', 'UnitMeasureController@index')->name('unit de Medida');

