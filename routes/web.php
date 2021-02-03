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

//Public
Route::get('/', ['uses' => 'HomeController@index', 'as' =>'web.home']);
Route::get('/blog', ['uses' => 'HomeController@blog', 'as' =>'web.blog']);
Route::get('/wahana', ['uses' => 'PlaceController@show', 'as' =>'web.places']);
Route::get('/paket-wisata', ['uses' => 'PackageController@show', 'as' =>'web.packages']);
Route::get('blog_{slug}', ['uses' => 'PostController@show','as' => 'post']);


// Route::get('/', ['uses' => 'UserController@show', 'as' => 'web.home']);

Route::get('/galeri', function () {
    return view('web.gallery');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function(){
    
     Route::get('/dasbor-galeri', function () {
         return view('admin.galeri');
     });

    Route::get('/dasbor',['uses' => 'HomeController@dashboard', 'as' =>'dashboard']);

    Route::get('/dasbor-blog',['uses' => 'PostController@index','as' => 'posts.index']);

    //Blog
    Route::get('/dasbor-blog',['uses' => 'PostController@index','as' => 'posts.index']);
    Route::get('/new-post', ['uses' => 'PostController@create','as' => 'posts.create']);
    Route::post('/new-post-store', ['uses' => 'PostController@store','as' => 'posts.store']);
    Route::get('posts-edit_{slug}',['uses' => 'PostController@edit', 'as' => 'post.edit']);
    Route::post('posts-update_{slug}',['uses' => 'PostController@update', 'as'=>'posts.update']);
    Route::delete('posts-delete_{post}',['uses' => 'PostController@destroy','as'=>'posts.destroy']);

    //Wahana
    Route::get('/dasbor-wahana',['uses' => 'PlaceController@index','as' => 'places.index']);
    Route::get('/new-wahana', ['uses' => 'PlaceController@create','as' => 'places.create']);
    Route::post('/new-wahana-store', ['uses' => 'PlaceController@store','as' => 'places.store']);
    Route::get('places-edit_{slug}',['uses' => 'PlaceController@edit', 'as' => 'place.edit']);
    Route::post('places-update_{slug}',['uses' => 'PlaceController@update', 'as'=>'places.update']);
    Route::delete('places-delete_{place}',['uses' => 'PlaceController@destroy','as'=>'places.destroy']);

    //Paket Wisata
    Route::get('/dasbor-paket',['uses' => 'PackageController@index','as' => 'packages.index']);
    Route::get('/new-paket', ['uses' => 'PackageController@create','as' => 'packages.create']);
    Route::post('/new-paket-store', ['uses' => 'PackageController@store','as' => 'packages.store']);
    Route::get('packages-edit_{slug}',['uses' => 'PackageController@edit', 'as' => 'package.edit']);
    Route::post('packages-update_{slug}',['uses' => 'PackageController@update', 'as'=>'packages.update']);
    Route::delete('packages-delete_{package}',['uses' => 'PackageController@destroy','as'=>'packages.destroy']);


    //Profile
    Route::get('/profil', 'UserController@index')->name('admin.profile');
    Route::put('/profil/update/{id}', 'UserController@update')->name('profile.update');

   


});