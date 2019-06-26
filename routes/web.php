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

Auth::routes();

Route::get('/', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

Route::get('user-chat',function (){
    return view('user_chat');
});

Route::get('api/users', 'Api\V1\UsersController@index');
Route::post('api/messages', 'Api\V1\MessagesController@index');
Route::post('api/messages/send', 'Api\V1\MessagesController@store');