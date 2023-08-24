<?php

use App\Http\Controllers\Dashboard\IndexController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['as'=>'dashboard.'] , function(){
    Route::PUT('/settings/{setting}/update', [SettingController::class , 'update' ])->name('settings.update'); 
    Route::get('/settings', [SettingController::class , 'index' ])->name('settings.index');
    Route::resource('category', CategoryController::class)->except('destroy'  , 'create' , 'show'); 
    
    Route::resource('products' , ProductController::class)->except('show');
});
Route::get('dashboard/category/ajax',[CategoryController::class ,'getall'])->name('dashboard.category.getall'); 
Route::get('dashboard/products/getall',[CategoryController::class ,'getall'])->name('dashboard.products.getall'); 
Route::delete('dashboard/category/delete',[CategoryController::class ,'delete'])->name('dashboard.category.delete'); 


Route::get('/index', [IndexController::class , 'index' ])->name('admin'); 