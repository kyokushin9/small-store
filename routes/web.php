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


Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/posts/{post}', 'ShowController')->name('post.show');
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/about', 'AboutController')->name('about.index');
    Route::get('/contact', 'ContactController')->name('contact.index');
});


Route::group(['namespace' => 'App\Http\Controllers\Admin','prefix' => 'admin', 'middleware' => 'admin'], function (){
    Route::get('/', 'IndexController')->name('admin.index');
    /*Route::group(['namespace' => 'Post'], function (){
        Route::get('/post', 'IndexController')->name('admin.post.index');
        Route::get('/posts/create', 'CreateController')->name('admin.post.create');
        Route::post('/posts', 'StoreController')->name('admin.post.store');
        Route::get('/posts/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/posts/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/posts/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/posts/{post}', 'DeleteController')->name('admin.post.delete');
    });*/
});
