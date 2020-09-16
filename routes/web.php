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



Route::get('/{url}', [
            'as'   => 'page::read',
            'uses' => '\App\Http\Controllers\PageController@index'
        ])->where('url', 'main||info||news');
