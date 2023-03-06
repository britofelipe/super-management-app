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

Route::get('/', 'HomeController@home');

Route::get('/about', 'AboutController@about');

Route::get('/contact', 'ContactController@contact');

Route::get(
    '/contact/{name}/{category_id}',
    function(
        string $name = "Unknown",
        int $category_id = 1
    ) {
        // Only optional from right to left
        echo "We are here: $name - $category_id";
    }
)->where('category_id', '[0-9]+')->where('name', '[A-Za-z]+');
