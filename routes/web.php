<?php

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

Route::get('/', 'IndexController@index');

Route::get('/posts/{post}', 'PostsController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/randomQuote', 'QuoteController@show');

Route::get('/fbtest', 'IndexController@fbsend');

Route::get('/try', 'PageController@compare');

Route::get('/comparing', 'PageController@compareWithTeams');

/*Route::get('/generating', ['as' => 'generating', 'uses' => 'GeneratorController@clubs']);*/

Route::get('/generator', ['as' => 'generator', 'uses' => 'GeneratorController@final_result_output']);

Route::post('/generator', 'GeneratorController@final_result_output');