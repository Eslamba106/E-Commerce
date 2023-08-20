<?php

use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');


// Route::get('/category', function () {
//     return view('dashboard.categories.index');
// })->name('category.index'); 
// Route::get('/category/edit', function () {
//     return view('dashboard.categories.edit');
// })->name('category.edit'); 



Auth::routes([
    'reset' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
