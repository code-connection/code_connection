<?php

Route::get('/comments/usercomment/{id}','CommentsController@edit');

Route::delete('/comments/usercomments/{id}','CommentsController@destroy');

Route::get('/comments/usercomments/{id}','CommentsController@showUserComments');

Route::post('/comments/create/{id}','CommentsController@store');

Route::get('/comments/create/{id}','CommentsController@showCreate');

Route::put('/comments/update/{id}', 'CommentsController@update');

Route::get('/posts/allposts', 'PostsController@showAllPosts');

Route::get('/posts/userposts/{id}','PostsController@showUserPosts');

Route::get('/','PostsController@index');

Route::get('/ajax/returntweets','TwitterController@returnTweets');

Route::get('/ajax/returnmeetups','MeetupController@returnMeetups');

Route::get('/users/gitmaptwitter','UserController@showGitMapTwitter');

Route::get('/users/account','UserController@avatarUpload');

Route::get('/users/account', 'UserController@showUserAccount');

Route::get('/users/account/{id}','UserController@editUserAccount');

Route::put('/users/account/{id}','UserController@editUserAccount');

Route::get('/users/change-password/{id}','UserController@showChangePassword');

Route::put('/users/change-password/{id}','UserController@doChangePassword');

Route::get('/users/userscreate','UserController@showUserCreate');

Route::post('/users/userscreate','UserController@validateAndSaveNewUser');

Route::get('/users/logout','UserController@logOut');

Route::post('/users/login','UserController@doLogin');

Route::get('/users/index', 'UserController@showIndex');

Route::get('/', 'PostsController@index');

Route::resource('posts','PostsController');


