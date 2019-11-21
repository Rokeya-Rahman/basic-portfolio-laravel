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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses'  =>  'BasicPortfolioController@index',
    'as'    =>  '/'
]);

Route::group(['middleware' => 'portfolio'], function () {

    Route::get('/create-gallery', [
        'uses'  =>  'GalleryController@index',
        'as'    =>  'create-gallery'
    ]);

    Route::post('/new-gallery', [
        'uses'  =>  'GalleryController@newGallery',
        'as'    =>  'new-gallery'
    ]);

    Route::get('/edit-gallery/{id}', [
        'uses'  =>  'GalleryController@editGallery',
        'as'    =>  'edit-gallery'
    ]);

    Route::post('/update-gallery', [
        'uses'  =>  'GalleryController@updateGallery',
        'as'    =>  'update-gallery'
    ]);

    Route::post('/delete-gallery', [
        'uses'  =>  'GalleryController@deleteGallery',
        'as'    =>  'delete-gallery'
    ]);

    Route::get('/create-portfolio/{id}', [
        'uses'  =>  'PortfolioController@createPortfolio',
        'as'    =>  'create-portfolio'
    ]);

    Route::post('/new-portfolio', [
        'uses'  =>  'PortfolioController@newPortfolio',
        'as'    =>  'new-portfolio'
    ]);

    Route::get('/edit-portfolio/{id}', [
        'uses'  =>  'PortfolioController@editPortfolio',
        'as'    =>  'edit-portfolio'
    ]);

    Route::post('/update-portfolio', [
        'uses'  =>  'PortfolioController@updatePortfolio',
        'as'    =>  'update-portfolio'
    ]);

    Route::post('/delete-portfolio', [
        'uses'  =>  'PortfolioController@deletePortfolio',
        'as'    =>  'delete-portfolio'
    ]);

});





Route::get('/portfolio/{id}/{title}', [
    'uses'  =>  'PortfolioController@index',
    'as'    =>  'show-portfolio'
]);





Route::get('/show-project/{id}/{title}', [
    'uses'  =>  'ProjectController@index',
    'as'    =>  'show-project'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
