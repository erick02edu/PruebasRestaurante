<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::domain("{subdominio}.subdominios.test")->middleware('trainer')->group(function () {

    Route::get('/home', function ($tenant) {
        return "Hola bienvenido al: $tenant";
    });

    Route::get('/menu', function($tenant){
        return "Este es el menu del restaurante $tenant";
    });
});


// Route::get('/', function () {
//     return 'listo, tu primer subdominio';
// })->domain('blog.' . env('APP_URL'));
