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

 Route::get('/news', [Article::class, 'index']);
 Route::get('/news/{id}', [Article::class, 'show']);
 Route::get('/category', [Article::class, 'category']);
