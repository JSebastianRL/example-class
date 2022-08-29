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

// Route::get('/{parametro}', function ($parametro = null) {
//     if ($parametro == null) return "hola";

//     return "hola {$parametro}";
// });

Route :: get ('/', [ App\Http\Controllers\HomeController  :: class, 'index']);

Route :: group(['prefix'=> 'Person'], function(){
    Route :: post('/store', [App\Http\Controllers\PersonController  :: class, 'store']);
    Route :: get('/delete/{id}', [App\Http\Controllers\PersonController  :: class, 'delete']);
    Route :: get('/edit/{id}', [App\Http\Controllers\PersonController  :: class, 'edit']);
    Route :: put('/update{id}', [App\Http\Controllers\PersonController  :: class, 'update']);


});