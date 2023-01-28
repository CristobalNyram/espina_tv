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



Auth::routes();
//routes for admin-start
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
Route::get('/admin/sponsors', [App\Http\Controllers\Admin\SponsorController::class, 'index'])->name('admin.sponsor.index');

//routes for admin-end


//routes for  landing page -start
//routes for landing page        -end
