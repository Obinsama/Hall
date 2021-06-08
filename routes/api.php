<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user','UsersController@connected');
//     function (Request $request) {
//         $user=$request->user();
//         return $user;
//     }
////Route::post("messages","ChatsController@sendMessage")->name("sendMessage");
//Route::post("messages/content","ChatsController@getContent")->name("getContent");
//Route::post("messages/state","ChatsController@getState")->name("getState");
//Route::post("messages/count","ChatsController@counter")->name("counter");