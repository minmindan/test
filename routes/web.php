<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
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
    return view('index');
});

Route::post('/create',[TestController::class, 'create']);

Route::get('/list',[TestController::class, 'list']);

Route::post('/delete/{id}',[TestController::class, 'delete']);

Route::get('/edit/{id}',[TestController::class, 'edit']);

Route::post('/update/{id}',[TestController::class, 'update']);
