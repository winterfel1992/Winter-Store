<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Product;
use App\Category;
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

/* $prod = new Product();

$prod->nombre = 'Producto 3';
$prod->slug = 'Producto 3';
$prod->Category_id = 2;
$prod->descripcion_corta = 'Producto ';
$prod->descripcion_larga = 'Producto ';
$prod->especificaciones = 'Producto ';
$prod->datos_de_interes = 'Producto ';
$prod->estado = 'Nuevo';
$prod->activo = 'Si';
$prod->sliderprincipal = 'No';
$prod->save();
return $prod;
 */



    /* return view('welcome'); */
 
    /* $prod = Product::find(3)->category;
    return $prod;  */

   /*  $cat = Category::find(1)->products;
    return $cat;  */

return view('tienda.index');
});

Auth::routes(['verify'=>true]);



Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('/admin')->group(function(){
    Route::get('/', 'HomeController@adminIndex');
    /* Route::get('/userManage', 'UserController@index'); */
    
});