<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\LoginController;
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




Route::group(['prefix'=>'admin'],function(){
    Route::get('/', function () {
        return view('layouts.parent');
    })->name('home')->middleware('admin');
    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login_data',[LoginController::class,'Data_Login'])->name('Data_Login');
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');

    Route::resource('crud', CrudController::class)->middleware('admin');
});
