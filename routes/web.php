<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Basic Routing
 */
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
});

/**
 * Use Case Basic Routing in Jobsheet
 */
Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return 'NIM     : 2241720133'. '<br>'. 'Nama    : Muhammad Khairunnas Nurdin';
});
