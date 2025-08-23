<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

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

Auth::routes();

Route::get('/home', function () {
    return redirect('/chatify');
});

Route::get('/admin-config', [App\Http\Controllers\AdminController::class, 'index'])->middleware('admin');
Route::post('/update-ip', [App\Http\Controllers\AdminController::class, 'update'])->middleware('admin');
Route::get('/chatify/{id?}', [MessagesController::class, 'index'])->name('chatify');
