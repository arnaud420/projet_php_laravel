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

Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);

Route::resource('users', 'UsersController');

Route::resource('users.commentaires', 'UserCommentairesController', array('parameters' => 'singulier'));

/*Route::group(['middleware' => 'isAdmin', 'auth'], function (
    Route::get(Admin, \foo\function())
)) */
//group :: Admin : middleware : isAdmin :