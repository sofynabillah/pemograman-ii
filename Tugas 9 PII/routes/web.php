<?php
use App\Http\Controllers\GroupsController;
use Illuminate\Support\Facades\Route;

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
Route::get('', 'App\Http\Controllers\CobaController@index');
//Route::get('/friends', 'App\Http\Controllers\CobaController@index');
//Route::get('/friends/create', 'App\Http\Controllers\CobaController@create');
//Route::post('/friends', 'App\Http\Controllers\CobaController@store');
//Route::get('/friends/{id}', 'App\Http\Controllers\CobaController@show');
//Route::get('/friends/{id}/edit', 'App\Http\Controllers\CobaController@edit');
//Route::put('/friends/{id}', 'App\Http\Controllers\CobaController@update');
//Route::delete('/friends/{id}', 'App\Http\Controllers\CobaController@destroy');

//Route::resource('friends', 'App\Http\Controllers\CobaController');
Route::resources([
    'friends' => 'App\Http\Controllers\CobaController',
    'groups' => 'App\Http\Controllers\GroupsController',
]);
Route::get('/groups/addmember/{group}', 'App\Http\Controllers\GroupsController@addmember');
Route::put('/groups/addmember/{group}', 'App\Http\Controllers\GroupsController@updateaddmember');
Route::put('/groups/deleteaddmember/{group}', 'App\Http\Controllers\GroupsController@deleteaddmember');