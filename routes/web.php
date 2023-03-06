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

Route::get('/', 'HomeController@home')->name('site.home');
Route::get('/about', 'AboutController@about')->name('site.about');
Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::get('/login', function() { return "Login"; })->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clients', function() { return "Clients"; })->name('app.clients');
    Route::get('/supliers', 'SupliersController@index')->name('app.supliers');
    Route::get('/products', function() { return "Products"; })->name('app.products');
});

Route::get('/test/{p1}/{p2}', 'TestController@test')->name('test');

Route::fallback(function() {
    echo "This page doesn't existe. Click <a href='/'>here</a> to be redirected to the homepage";
});
