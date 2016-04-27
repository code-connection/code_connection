<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::put('/comments/usercomments/{id}','CommentsController@update');

Route::delete('/comments/usercomments/{id}','CommentsController@destroy');

Route::get('/comments/usercomments/{id}','CommentsController@showUserComments');

Route::post('/comments/create/{id}','CommentsController@store');

Route::get('/comments/create/{id}','CommentsController@showCreate');

Route::get('/users/account','UserController@avatarUpload');



Route::get('/posts/userposts/{id}','PostsController@showUserPosts');

Route::get('/','PostsController@index');


Route::get('/users/account/{id}','UserController@showUserAccount');

Route::post('/users/account/{id}','UserController@editUserAccount');

Route::get('/users/change-password/{id}','UserController@showChangePassword');

Route::put('/users/change-password/{id}','UserController@doChangePassword');

Route::get('/users/userscreate','UserController@showUserCreate');

Route::post('/users/userscreate','UserController@validateAndSaveNewUser');

Route::get('/users/logout','UserController@logOut');

Route::post('/users/login','UserController@doLogin');

Route::get('/users/account','UserController@showUserAccount');




Route::resource('posts','PostsController');

