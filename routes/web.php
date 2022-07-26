<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\EBookController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/index', [AccountController::class, 'viewIndex']);
Route::get('/login', function(){
    if(session()->has('email')){
        return redirect('home');
    }
    return redirect('login');
});

Route::post('/login',[AccountController::class,'login']);
Route::get('/logout', function(){
    if(session()->has('email')){
        session()->pull('email');
    }
    return redirect('login');
});
Route::get('/signup', [AccountController::class, 'viewSignUp']);
Route::post('/signup',[AccountController::class,'signup']);

// Route::group(['middleware'=>'user'],function(){
    Route::get('/home', [EBookController::class, 'viewHome']);
    Route::get('/detail/{id}', [EBookController::class, 'viewDetail']);
// });

// Route::group(['middleware'=>'admin'],function(){
    Route::put('/edit-profile/{id}', [AccountController::class, 'updateProfile']);
    Route::get('/profile/{id}', [AccountController::class, 'viewProfile']);
// });

Route::get('/update/{id}', [AccountController::class, 'viewUpdate']);

Route::get('/maintenance', [AccountController::class, 'viewMaintenance']);



