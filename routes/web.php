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

Route::namespace('App\Http\Controllers')->group(function () {
    //login page
    //___________________________________________________________________________________________________________________//
    Route::match(['GET', 'POST'], '/', 'Page@login')->name('login');
    Route::match(['GET', 'POST'], '/getlogin', 'Athu@getlogin')->name('getlogin');
    Route::post('/logout', 'Athu@logout')->name('logout');
    // ________________________________________________________________________________________________________________//
    // _________________________________________________vo trang_______________________________________________________//
    Route::prefix("page")->middleware('Pagelogin')->group(function () {
        Route::get('/', 'Page@index')->name('page/index');
    });
    //admin
    Route::prefix('admin')->group(function () {
        Route::match(['GET', 'POST'], '/', 'Admin@post')->name('post');
        Route::match(['GET', 'POST'], '/get', 'Admin@get')->name('get');
        Route::post('/adminlogout', 'Admin@adminlogout')->name('adminlogout');
        //trang quản lý admin
        Route::prefix('dashboard')->middleware('Adminlogin')->group(function () {
            Route::get('/', 'dashboard@index')->name('dashboard/index');
            Route::get('/products','dashboard@products')->name('dashboard/products');
            //them 
            Route::post('product/newpost','dashboard@productnewpost')->name('products/mewpost');
         
            //xoa
            Route::delete('product-delete/{id}', 'dashboard@productdelete')->name('product-delete');
            
            //sua
            Route::put('product-getedit/{id}','dashboard@productedit')->name('getedit');
            // Route::patch('product-updateedit/{id}','dashboard@productupdateedit')->name('productupdateedit');
            //luu thong tin nguoi dung
            Route::get('/user','dashboard@user')->name('user');
        });
    });
    // login Admin
});
