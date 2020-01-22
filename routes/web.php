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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['auth']], function(){

	Route::prefix('admin')->namespace('Admin')->group(function(){

		Route::prefix('restaurants')->group(function(){

	    	Route::get('/', 'RestaurantController@index')->name('restaurant.index');;
	    	Route::get('/new', 'RestaurantController@new')->name('restaurant.new');
	    	Route::post('/store', 'RestaurantController@store')->name('restaurant.store');
	    	Route::get('/edit/{id}', 'RestaurantController@edit')->name('restaurant.edit');
	    	Route::post('/update/{id}', 'RestaurantController@update')->name('restaurant.update');
	    	Route::get('/delete/{id}', 'RestaurantController@delete')->name('restaurant.remove');
	    });

	    Route::prefix('users')->group(function(){

	    	Route::get('/', 'UserController@index')->name('user.index');
	    	Route::get('/new', 'UserController@new')->name('user.new');
	    	Route::post('/store', 'UserController@store')->name('user.store');
	    	Route::get('/edit/{id}', 'UserController@edit')->name('user.edit');
	    	Route::post('/update/{id}', 'UserController@update')->name('user.update');
	    	Route::get('/delete/{id}', 'UserController@delete')->name('user.remove');
	    });

	     Route::prefix('clients')->group(function(){

	    	Route::get('/', 'ClientController@index')->name('client.index');
	    	Route::get('/new', 'ClientController@new')->name('client.new');
	    	Route::post('/store', 'ClientController@store')->name('client.store');
	    	Route::get('/edit/{id}', 'ClientController@edit')->name('client.edit');
	    	Route::post('/update/{id}', 'ClientController@update')->name('client.update');
	    	Route::get('/delete/{id}', 'ClientController@delete')->name('client.remove');
	    });
    
    	
	});
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
