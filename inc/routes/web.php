<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::controller(PostController::class)->group(function(){
    Route::get('/', 'index');
    Route::post('posts', 'store')->name('posts.store');
});