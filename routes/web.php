<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductController::class,'index'])->name('products.index');
Route::get('/products/create',[ProductController::class,'create'])->name('products.create');
Route::post('/products/store',[ProductController::class,'store'])->name('products.store');

Route::get('/products/{id}',[ProductController::class,'show'])->name('products.show');

Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');

Route::post('/products/update/{id}',[ProductController::class,'update'])->name('products.update');

//comment module
Route::post('/products/{id}',[CommentController::class,'addComment'])->name('products.comment.add');

//Admin

Route::prefix('admin')->middleware('auth','isadmin')->group(function(){
    // Route::group(['middleware'=>['auth']],function(){
            Route::get('/products',[AdminController::class,"adminGetAllProducts"])->name('admin.products');
            Route::get('/products/comments',[AdminController::class,"adminGetAllComments"])->name('admin.products.comments');
            
            Route::delete('/products/{id}',[AdminController::class,"adminDeleteProduct"])->name('admin.products.delete');
            Route::delete('/products/comments/{id}',[AdminController::class,"adminDeleteComment"])->name('admin.products.comments.delete');
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
