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

Route::group(['middleware' => ['web']], function(){
    Route::get('/', function () {
        // return view('welcome');
        return view('auth.login');
    });
    
    Auth::routes();
    
    Route::group(['middleware' => ['auth']], function(){
        Route::get('/', function () {
            // return view('welcome');
            return view('home');
        })->name('home');

        Route::get('/home', 'HomeController@index')->name('home');

        Route::get('esnbcs','EsnbcController@index')->name('esnbc-index');
        Route::get('esnbcs/create','EsnbcController@create')->name('esnbc-create');
        Route::post('esnbcs','EsnbcController@store')->name('esnbc-store'); 
        Route::get('esnbcs/{esnbc}/edit','EsnbcController@edit')->name('esnbc-edit'); 
        Route::patch('esnbcs/{esnbc}','EsnbcController@update')->name('esnbc-update');
        Route::delete('esnbcs/{esnbc}','EsnbcController@destroy')->name('esnbc-destroy');
        Route::get('esnbcs/verifydata', 'EsnbcController@verifydata')->name('esnbc-verifydata');
        Route::get('esnbcs/get_batches_info_lst', 'EsnbcController@get_batches_info_lst')->name('esnbc-get-batches-info-lst');

        Route::get('esnbc-subsets','EsnbcSubsetController@index')->name('esnbc-subset-index');
        Route::get('esnbc-subsets/create','EsnbcSubsetController@create')->name('esnbc-subset-create');
        Route::post('esnbc-subsets','EsnbcSubsetController@store')->name('esnbc-subset-store'); 
        Route::get('esnbc-subsets/{esnbc_subset}/edit','EsnbcSubsetController@edit')->name('esnbc-subset-edit'); 
        Route::patch('esnbc-subsets/{esnbc_subset}','EsnbcSubsetController@update')->name('esnbc-subset-update');
        Route::delete('esnbc-subsets/{esnbc_subset}','EsnbcSubsetController@destroy')->name('esnbc-subset-destroy');

        Route::get('esnbc-subsets/{esnbc_subset}/qrcode','EsnbcSubsetController@qrcode')->name('esnbc-subset-qrcode');
        
        Route::group(['middleware' => ['is_admin']], function(){
            Route::get('admin', 'Admin\AdminController@index');
            Route::resource('admin/roles', 'Admin\RolesController');
            Route::resource('admin/permissions', 'Admin\PermissionsController');
            Route::resource('admin/users', 'Admin\UsersController');
            Route::resource('admin/pages', 'Admin\PagesController');
            Route::resource('admin/activitylogs', 'Admin\ActivityLogsController')->only([
                'index', 'show', 'destroy'
            ]);
            Route::resource('admin/settings', 'Admin\SettingsController');
            Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
            Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
        });
    });
});
