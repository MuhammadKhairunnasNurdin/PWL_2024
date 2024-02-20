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

/**
 * Routing name
 */
Route::get('/profile/user/{name}', function ($name) {
    return "hey $name";
})->name('profile');
Route::get('/test', function () {
    return to_route('profile', ['name' => 'khairunnas']);
});

/**
 * Group Routing
 */
Route::middleware(['first', 'second'])->group(function () { Route::get('/', function () {
// Uses first & second middleware...
});
    Route::get('/user/profile', function () {
// Uses first & second middleware...
    });
});

/**
 * Group Routing
 */
Route::domain('{account}.example.com')->group(function ()
{ Route::get('user/{id}', function ($account, $id) {
    //
    });
});

/**
 * Group Routing
 */
Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});

/**
 * Prefixes Routing
 */
Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});

/**
 * Redirect Routing
 */
Route::redirect('/here', '/there');

/**
 * View Routing
 */
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
