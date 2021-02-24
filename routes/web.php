<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Permisos\Models\Role;
use App\Permisos\Models\Permission;


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
Route::get('/', 'PublicController@index');
Route::resource('/','PublicController')->names('inicio');
Route::get('/visor', 'VisorController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/role', 'RoleController')->names('role');
Route::get('/logout', 'Auth\LoginController@logout');


Route::group(['prefix'=>'SistTrans', 'middleware'=>['auth'], 'namespace'=> 'Administrador'], function(){

    Route::get('Admin',[
        'uses'=>'AdminController@index',
        'as'=> 'inicio'
    ]);
    Route::resource('documento', 'DocumentoController')->names('documento');
    Route::resource('sunoita', 'SunoitaController')->names('sunoita');
    Route::resource('sdosita', 'SdositaController')->names('sdosita');
    Route::resource('sdositb', 'SdositbController')->names('sdositb');
    Route::resource('sdositc', 'SdositcController')->names('sdositc');







});

Route::group(['prefix'=>'SistTrans', 'middleware'=>['auth'], 'namespace'=> 'Publicador'], function(){

    Route::get('Pub',[
        'uses'=>'PubController@index',
        'as'=> 'inicio'
    ]);

});



