<?php

use App\Http\Controllers\FrontEndController;
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

Route::get('login-view',[FrontEndController::class,'loginView'])->name('loginView');

Route::post('do-login',[FrontEndController::class,'doLogin'])->name('doLogin');

Route::get('register',[FrontEndController::class,'register'])->name('register');
Route::post('user-save',[FrontEndController::class,'userSave'])->name('userSave');

Route::group(['middleware'=>'auth'], function(){

    Route::get('home',[FrontEndController::class,'homePage'])->name('homePage');
    Route::get('log-out',[FrontEndController::class,'logOut'])->name('logOut');
    
});