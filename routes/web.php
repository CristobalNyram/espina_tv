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
    Route::get('/sponsors/list', [App\Http\Controllers\Admin\SponsorController::class, 'getSponsors'])->name('admin.sponsor.list');
    Route::get('/sponsors/delete/{id}', [App\Http\Controllers\Admin\SponsorController::class, 'delete'])->name('admin.sponsor.delete');
    Route::get('/sponsors/desactive/{id}', [App\Http\Controllers\Admin\SponsorController::class, 'desactive'])->name('admin.sponsor.desactive');
    Route::get('/sponsors/active/{id}', [App\Http\Controllers\Admin\SponsorController::class, 'active'])->name('admin.sponsor.active');
    Route::post('/sponsors/store', [App\Http\Controllers\Admin\SponsorController::class, 'store'])->name('admin.sponsor.store');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');

});
Route::post('/user', function () {
    return json_encode('hola');

});
//landing page
Route::get('/', [App\Http\Controllers\Frontend\LandingpagewebController::class, 'index'])->name('ladingpage.index');
Route::get('/services', [App\Http\Controllers\Frontend\LandingpagewebController::class, 'services'])->name('ladingpage.services');
Route::get('/contact', [App\Http\Controllers\Frontend\LandingpagewebController::class, 'contact_us'])->name('ladingpage.contact_us');
Route::get('/services/torilleria-lucerito', [App\Http\Controllers\Frontend\LandingpagewebController::class, 'service_page'])->name('ladingpage.service.page');

//routes for admin-end


//routes for  landing page -start
//routes for landing page        -end
