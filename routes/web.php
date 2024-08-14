<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('delete/pub',function(){

    File::delete(public_path('images/game.jpg'));
    return back()->with("pub","pub file deleted");
});

Route::get('delete/storage',function(){

    Storage::delete('images/game.jpg');
    return back()->with("sto","storage file deleted");
});