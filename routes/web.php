<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//request type: get, post, put, patch
// / -> localhost 127.0.0.1 
Route::get('/', function () {
    //$name = 'Gerardo';
return view('welcome'/*,['name' => $name]*/);//array en forma de mapa
});

//Route::get('/categorias', 'CategoriesController@index' );
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
