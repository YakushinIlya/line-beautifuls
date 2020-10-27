<?php

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



Route::get('/', 'HomeController@index')->name('home');

Route::group([
    'prefix'=>'adminlb',
    'namespace' => 'Admin',
    'middleware' => ['auth'],
], function(){
    Route::get('/', 'AdminController@panel')->name('adminPanel');

    Route::get('/pages', 'PagesController@index')->name('adminPages');
    Route::match(['get', 'post'],'/page/create', 'PagesController@pageCreate')->name('adminPageCreate');
    Route::match(['get', 'post'],'/page/update/{id?}', 'PagesController@pageUpdate')->name('adminPageUpdate');
    Route::get('/page/delete/{id}', 'PagesController@pageDelete')->name('adminPageDelete');

    Route::get('/slider', 'SliderController@index')->name('adminSlider');
    Route::get('/news', 'NewsController@index')->name('adminNews');
    Route::get('/services', 'ServicesController@index')->name('adminServices');
    Route::get('/privilege', 'PrivilegeController@index')->name('adminPrivilege');
    Route::get('/media', 'MediaController@index')->name('adminMedia');
    Route::get('/contacts', 'ContactsController@index')->name('adminContacts');
});

Route::get('/{page}', 'PagesController@index')->where('page', '[A-Za-z0-9-_]+')->name('page');
Route::get('/error/{num}', 'PagesController@error')->where('num', '[0-9]+')->name('error');

Auth::routes();