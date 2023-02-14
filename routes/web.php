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


Route::prefix('admin')->group(function () {
    Auth::routes();
    Route::get('/sponsors', [App\Http\Controllers\Admin\SponsorController::class, 'index'])->name('admin.sponsor.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

});

//landing page
Route::get('/', [App\Http\Controllers\Frontend\LadingpageController::class, 'index'])->name('ladingpage.index');

//routes for admin-end


//routes for  landing page -start
//routes for landing page        -end
