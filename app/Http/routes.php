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

/*
Route::get('about',['middleware' => 'auth', function()
{
    return 'this page will only show if the user is signed in';
}]);
*/
Route::get('/', function () {
    return view('welcome');
});


Route::resource('articles','ArticlesController');

//Route::get('articles','ArticlesController@index');
//Route::get('articles/create','ArticlesController@create');
//Route::get('articles/{id}','ArticlesController@show');
//Route::post('articles','ArticlesController@store');
//Route::get('articles/{id}/edit','ArticlesController@edit');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('foo', ['middleware' => 'manager', function()
{
    return 'this page may only be viewed by managers';
}]);