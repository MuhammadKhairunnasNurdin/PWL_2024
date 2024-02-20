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

/**
 * Routing Parameters
 */
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-" . $commentId;
});

/**
 * Use Case Routing Parameters in Jobsheet
 */
Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID: $id";
});

/**
 * Optional Routing
 */
Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});
