<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TasksController;
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
//Route::resource('Users','App\Http\Controllers\UsersController');
Route::resource('Users','App\Http\Controllers\UsersController')->middleware("checkAuth");
Route::resource('Tasks','App\Http\Controllers\TasksController')->middleware("checkAuth");
//Route::resource('Tasks','App\Http\Controllers\TasksController');
Route::get('Login','App\Http\Controllers\UsersController@loginView')->name('login');

Route::post('doLogin','App\Http\Controllers\UsersController@login');

Route::get('Logout','App\Http\Controllers\UsersController@logout');
?>