<?php




Route::put('/comments/usercomments/{id}','CommentsController@update');

Route::delete('/comments/usercomments/{id}','CommentsController@destroy');

Route::get('/comments/usercomments/{id}','CommentsController@showUserComments');

Route::post('/comments/create/{id}','CommentsController@store');

Route::get('/comments/create/{id}','CommentsController@showCreate');

Route::get('/users/account','UserController@avatarUpload');


Route::put('/posts','PostsController@index');

Route::put('/posts/userposts/{id}','PostsController@update');

Route::delete('/posts/userposts/{id}','PostsController@destroy');

Route::get('/posts/userposts/{id}','PostsController@showUserPosts');


Route::get('/users/account/{id}','UserController@showUserAccount');

Route::post('/users/account/{id}','UserController@editUserAccount');

Route::get('/users/change-password/{id}','UserController@showChangePassword');

Route::put('/users/change-password/{id}','UserController@doChangePassword');

Route::get('/users/userscreate','UserController@showUserCreate');

Route::post('/users/userscreate','UserController@validateAndSaveNewUser');

Route::get('/users/logout','UserController@logOut');

Route::post('/users/login','UserController@doLogin');

Route::get('/users/account','UserController@showUserAccount');

Route::get('/users/index', 'UserController@showIndex');



// Route::get('/posts','PostsController@index');
// Route::get('/posts/create', 'PostsController@create');
// Route::post('/posts','PostsController@store');
// Route::get('/posts/{posts}','PostsController@show');
// Route::get('/posts/{posts}/edit','PostsController@edit');
// Route::put('/posts/{posts}','PostsController@update');
// Route::delete('/posts/{posts}','PostsController@destroy');

Route::resource('posts','PostsController');


