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
    //   return view('welcome');

    // if(Auth::check()){

    //     return "the user is logged in";
    // }

    // $username = 'pinki';

    // $password = 'pinki1234';

    // if(Auth::attempt(['username'=>$username,'password'=>$password])){

    //     return redirect()->intended('/admin');
    // }

        Auth::logout();

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

