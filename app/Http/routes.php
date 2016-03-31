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

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

     


});


Route::get('about',  ['as' => 'about.index' ,'uses'=> function(){return 'about.index';}]);
    Route::get('hot',    ['as' => 'posts.hot' ,'uses'=> function(){return 'post.hot';}]);
    Route::post('posts',  ['as'=> 'posts.store','uses'=>function(){return 'post.store';}]);
    Route::get('posts',  ['as'=> 'posts.index','uses'=>function(){return 'post.index';}]);
    Route::get('posts/create',  ['as'=> 'posts.create','uses'=>function(){return 'post.create';}]);
    Route::delete('posts/{id}',['as' => 'posts.destory','uses'=>function(){return 'post.destory';}]);
    Route::patch('posts/{id}',['as' => 'posts.update','uses'=>function(){return 'post.update';}]);
    Route::get('posts/{id}',['as' => 'posts.show','uses'=>function(){return 'post.show';}]);
    Route::post('posts/{id}/comment',['as' => 'posts.comment','uses'=>function(){return 'post.comment';}]);
    Route::get('posts/{id}/edit',['as' => 'posts.edit','uses'=>function(){return 'post.edit';}]);
    Route::get('random',['as' => 'posts.random','uses'=>function(){return 'post.random';}]);


  


