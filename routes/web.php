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

Route::get('/', [App\Http\Controllers\front\IndexController::class, 'index'])->name('index');
Route::get('/kitap/detay/{selflink}', [App\Http\Controllers\front\kitap\IndexController::class, 'index'])->name('kitap.detay');

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

    Route::group(['namespace'=>'kitap', 'prefix'=>'kitap', 'as'=>'kitap.'], function (){
        Route::get('/',[\App\Http\Controllers\admin\kitap\indexController::class, 'index'])->name('index');
        Route::get('/ekle',[\App\Http\Controllers\admin\kitap\indexController::class, 'create'])->name('create');
        Route::post('/ekle',[\App\Http\Controllers\admin\kitap\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}',[\App\Http\Controllers\admin\kitap\indexController::class,'edit'])->name('edit');
        Route::post('/duzenle/{id}',[\App\Http\Controllers\admin\kitap\indexController::class,'update'])->name('edit.post');
        Route::get('/sil/{id}',[\App\Http\Controllers\admin\kitap\indexController::class,'delete'])->name('delete');
    });

    Route::group(['namespace'=>'kategori', 'prefix'=>'kategori', 'as'=>'kategori.'], function (){
        Route::get('/',[\App\Http\Controllers\admin\kategori\indexController::class, 'index'])->name('index');
        Route::get('/ekle',[\App\Http\Controllers\admin\kategori\indexController::class, 'create'])->name('create');
        Route::post('/ekle',[\App\Http\Controllers\admin\kategori\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}',[\App\Http\Controllers\admin\kategori\indexController::class,'edit'])->name('edit');
        Route::post('/duzenle/{id}',[\App\Http\Controllers\admin\kategori\indexController::class,'update'])->name('edit.post');
        Route::get('/sil/{id}',[\App\Http\Controllers\admin\kategori\indexController::class,'delete'])->name('delete');
    });

    Route::group(['namespace'=>'slider', 'prefix'=>'slider', 'as'=>'slider.'], function (){
        Route::get('/',[\App\Http\Controllers\admin\slider\indexController::class, 'index'])->name('index');
        Route::get('/ekle',[\App\Http\Controllers\admin\slider\indexController::class, 'create'])->name('create');
        Route::post('/ekle',[\App\Http\Controllers\admin\slider\indexController::class, 'store'])->name('create.post');
        Route::get('/duzenle/{id}',[\App\Http\Controllers\admin\slider\indexController::class,'edit'])->name('edit');
        Route::post('/duzenle/{id}',[\App\Http\Controllers\admin\slider\indexController::class,'update'])->name('edit.post');
        Route::get('/sil/{id}',[\App\Http\Controllers\admin\slider\indexController::class,'delete'])->name('delete');
    });
});
