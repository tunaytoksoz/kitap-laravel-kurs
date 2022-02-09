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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace'=>'admin', 'prefix'=>'admin', 'as'=>'admin.'], function(){

    Route::get('/',[\App\Http\Controllers\admin\indexController::class,'index'])->name('index');

    Route::group(['namespace'=>'yayinevi', 'prefix'=>'yayinevi', 'as'=>'yayinevi.'], function (){
       Route::get('/',[\App\Http\Controllers\admin\yayinevi\indexController::class, 'index'])->name('index');
       Route::get('/ekle',[\App\Http\Controllers\admin\yayinevi\indexController::class, 'create'])->name('create');
       Route::post('/ekle',[\App\Http\Controllers\admin\yayinevi\indexController::class, 'store'])->name('create.post');
       Route::get('/duzenle/{id}',[\App\Http\Controllers\admin\yayinevi\indexController::class,'edit'])->name('edit');
       Route::post('/duzenle/{id}',[\App\Http\Controllers\admin\yayinevi\indexController::class,'update'])->name('edit.post');
       Route::get('/sil/{id}',[\App\Http\Controllers\admin\yayinevi\indexController::class,'delete'])->name('delete');
    });

    Route::group(['namespace'=>'yazar', 'prefix'=>'yazar', 'as'=>'yazar.'], function (){
        Route::get('/',[\App\Http\Controllers\admin\yazar\indexController::class, 'index'])->name('index');
        Route::get('/ekle',[\App\Http\Controllers\admin\yazar\indexController::class, 'create'])->name('create');
        Route::post('/ekle',[\App\Http\Controllers\admin\yazar\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}',[\App\Http\Controllers\admin\yazar\indexController::class,'edit'])->name('edit');
        Route::post('/duzenle/{id}',[\App\Http\Controllers\admin\yazar\indexController::class,'update'])->name('edit.post');
        Route::get('/sil/{id}',[\App\Http\Controllers\admin\yazar\indexController::class,'delete'])->name('delete');
    });
});
