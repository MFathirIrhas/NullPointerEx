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

Route::get('/', function () {
    return view('homepage');
});

Route::get('notes','PostController@index');
Route::get('/bloghome',['as' => 'bloghome', 'uses' => 'PostController@index']);
//authentication
Route::controllers([
 'auth' => 'Auth\AuthController',
 'password' => 'Auth\PasswordController',
]);
// check for logged in user
Route::group(['middleware' => ['auth']], function()
{
 // show new post form
 Route::get('new-post','PostController@create');
 // save new post
 Route::post('new-post','PostController@store');
 // edit post form
 Route::get('edit/{slug}','PostController@edit');
 // update post
 Route::post('update','PostController@update');
 // delete post
 Route::get('delete/{id}','PostController@destroy');
 // display user's all posts
 Route::get('my-all-posts','UserController@user_posts_all');
 // display user's drafts
 Route::get('my-drafts','UserController@user_posts_draft');
 // add comment
 Route::post('comment/add','CommentController@store');
 // delete comment
 Route::post('comment/delete/{id}','CommentController@distroy');
});
//users profile
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');
// display list of posts
Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');
// display single post
Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');
//search articles
//Route::post('/search','PostController@search');

Route::get('/search', array(
     'as'    =>  'search',
     'uses'  =>  'PostController@search'
 ));

//Route::get('/search',['as' => 'posts.search', 'uses' => 'PostController@search']);