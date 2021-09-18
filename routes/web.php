<?php

use Illuminate\Support\Facades\Route;

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


Route::resource('usuarios', 'UsuariosController');


/*Route::get('/usuario', function () {
    return view('usuario.create');
});*/





/*
Route::get('/parcial', function () {
    return view('parcial');
});

Route::get('/menus', function () {
    return view('menus');
});
*/

//para crear un controlador por comandos:
//php artisan make:controller usuario

//para crear un modelo por comandos:
//php artisan make:model usuario

//para crear un mvc:
//php artisan make:model usuario -mcr

//para crear una ruta recursiva:
//php artisan make:controller usuario -r
