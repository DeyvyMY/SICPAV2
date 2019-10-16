<?php

use App\Http\Controllers\UnitMeasureController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('products', "ProductsController");
Route::resource('categories', 'CategoriesController');
Route::resource('unitmeasure', "UnitMeasureController");
Route::resource('tipogastos', "TipoGastosController");

Route::resource('vendors', "VendorsController");
Route::resource('vouchers', "VouchersController");