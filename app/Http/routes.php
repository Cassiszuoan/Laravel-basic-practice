<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

    

     


//
Route::get('/',  ['as' => 'Home.index' ,'uses'=> 'HomeController@index']);
Route::get('about',  ['as' => 'about.index' ,'uses'=> 'AboutController@index']);



//Posts
Route::get('hot',    ['as' => 'posts.hot' ,'uses'=> 'PostsController@hot']);
Route::patch('posts/{id}',['as' => 'posts.update','uses'=>'PostsController@update']);
Route::post('posts/{id}/comment',['as' => 'posts.comment','uses'=>'PostsController@comment']);
Route::get('random',['as' => 'posts.random','uses'=>'PostsController@random']); 
Route::get('post',  ['as'=> 'posts.index','uses'=>'PostsController@index']);
Route::get('posts/create',  ['as'=> 'posts.create','uses'=>'PostsController@create']);
Route::get('posts/{id}',['as' => 'posts.show','uses'=>'PostsController@show']);
Route::get('posts',['as' => 'posts.store','uses'=>'PostsController@store']);
Route::get('posts/{id}/edit',['as' => 'posts.edit','uses'=>'PostsController@edit']);
Route::delete('posts/{id}',['as' => 'posts.destory','uses'=>'PostsController@destory']);


