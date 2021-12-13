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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/about/actuarial_math', 'actuarial_math');
Route::view('/actuarial_math', 'actuarial_math');
Route::view('/about/acount', 'acount');
Route::view('/test', 'test');
Route::view('/web_boot', 'web_boot');
Route::view('/padding', 'padding');
