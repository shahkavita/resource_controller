<?php
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\authorController;
use App\Http\Controllers\postController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\customermanyController;
use App\Http\Controllers\teacherpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::resource('customerlist',customercontroller::class);
Route::resource('authorlist',authorController::class);
Route::resource('postlist',postController::class);
Route::resource('categorylist',categoryController::class);
Route::resource('productlist',productcontroller::class);
Route::resource('supplierlist',supplierController::class);
Route::resource('accountlist',accountController::class);
Route::resource('customer_many',customermanyController::class);
Route::resource('teacherlist',teacherController::class);
Route::resource('orderlist',orderController::class);
