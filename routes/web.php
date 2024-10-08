<?php

use App\Http\Controllers\Auth\AuthController;
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

//admin dashboard
Route::get('/',[AuthController::class,'index']);
//login
Route::post('/',[AuthController::class,'login'])->name('auth.login');

//logout
Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');

Route::get('/home',function(){
    if(Auth::check()){
        $user= Auth::user();
        if($user->role==1){
            return view('home');
        }else{
            return view('enduser.enduser');
        }

    }

})->name('home');
