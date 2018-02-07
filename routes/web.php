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
Route::get('/', 'testController@test');
Route::get('admin/login','userController@login');
Route::post('admin/login',['as'=>'login','uses'=>'userController@loginPost']);
Route::group(['prefix'=>'admin'],function(){//,'middleware'=>'login_admin'
	Route::get('/',['as'=>'index','uses'=>'admin_indexController@indexadmin']);
	Route::get('/calendar',['as'=>'calendar','uses'=>'admin_indexController@calendar']);
	Route::get('/btn',['as'=>'btn','uses'=>'admin_indexController@btn']);
	Route::get('/charts',['as'=>'charts','uses'=>'admin_indexController@charts']);
	Route::get('/chat',['as'=>'chat','uses'=>'admin_indexController@chat']);
	Route::get('/403',['as'=>'403','uses'=>'admin_indexController@l403']);
	Route::get('/404',['as'=>'404','uses'=>'admin_indexController@l404']);
	Route::get('/405',['as'=>'405','uses'=>'admin_indexController@l405']);
	Route::get('/500',['as'=>'500','uses'=>'admin_indexController@l500']);
	Route::get('/common',['as'=>'common','uses'=>'admin_indexController@common']);
	Route::get('/val',['as'=>'val','uses'=>'admin_indexController@val']);
	Route::get('/wiz',['as'=>'wiz','uses'=>'admin_indexController@wiz']);
	Route::get('/gal',['as'=>'gal','uses'=>'admin_indexController@gal']);
	Route::get('/grid',['as'=>'grid','uses'=>'admin_indexController@grid']);
	Route::get('/index2',['as'=>'index2','uses'=>'admin_indexController@index2']);
	Route::get('/interface_f',['as'=>'interface_f','uses'=>'admin_indexController@interface_f']);
	Route::get('/inv',['as'=>'inv','uses'=>'admin_indexController@inv']);
	Route::get('/tables',['as'=>'tables','uses'=>'admin_indexController@table']);
	Route::get('/wig',['as'=>'wig','uses'=>'admin_indexController@wig']);
});