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

Route::get('/', [
    'uses'=>'ApplicationController@getResApplication',
    'as'=>'getResidentialApplication'
]);

Route::post('residential-application', [
    'uses'=>'ApplicationController@postResApplication',
    'as'=>'res-application-create'
]);

Route::get('thank-you',[
    'uses'=>'ApplicationController@thanksForSubmitting',
    'as'=>'thank-you-page'
]);

//commercial application routes
Route::get('commercial', [
    'uses'=>'ApplicationController@getCommApplication',
    'as'=>'get-comm-application'
    ]);

Route::post('commercial-application', [
    'uses'=>'ApplicationController@postCommApplication',
    'as'=>'post-comm-application'
]);

//admin routes
Route::get('admin', [
    'uses'=>'ApplicationController@getAdminPage',
    'as'=>'get-admin-page'
]);

Route::get('admin/resAdmin', [
    'uses'=>'ApplicationController@getResAdminPage',
    'as'=>'get-res-admin-page'
]);

Route::get('admin/commAdmin', [
    'uses'=>'ApplicationController@getCommAdminPage',
    'as'=>'get-comm-admin-page'
]);

Route::get('admin/resDetails/{id}',[
    'uses'=>'ApplicationController@getResAppDetails',
    'as'=>'get-res-app-details'
]);

Route::get('admin/commDetails/{id}', [
    'uses'=>'ApplicationController@getCommAppDetails',
    'as'=>'get-comm-app-details'
]);

//Update Routes---------------------------------------
Route::get('admin/resDetails/Edit/{id}', [
    'uses'=>'ApplicationController@getEditResDetails',
    'as'=>'get-edit-res-details'
]);

Route::post('update-res-details', [
    'uses'=>'ApplicationController@postEditResDetails',
    'as'=>'post-edit-res-details'
]);

Route::get('admin/commDetails/Edit/{id}', [
    'uses'=>'ApplicationController@getEditCommDetails',
    'as'=>'get-edit-comm-details'
]);

Route::post('update-comm-details', [
    'uses'=>'ApplicationController@postEditCommDetails',
    'as'=>'post-edit-comm-details'
]);

//Delete Routes-----------------------------------------
//residential get and post routes
Route::get('admin/resAdmin/delete-page/{id}', [
    'uses'=>'ApplicationController@getDeleteDetails',
    'as'=>'get-delete-details'
]);

Route::post('delete-res-record', [
    'uses'=>'ApplicationController@postDeleteResRecord',
    'as'=>'post-delete-res-record'
]);

//commercial get and post routes
Route::get('admin/commDetails/delete-page/{id}', [
    'uses'=>'ApplicationController@getCommDeleteDetails',
    'as'=>'get-comm-delete-details'
]);

Route::post('delete-comm-record', [
    'uses'=>'ApplicationController@postDeleteCommRecord',
    'as'=>'post-delete-comm-record'
]);

//Scheduling Routes------------------------------------
Route::get('admin/resScheduling/{id}', [
    'uses'=>'ApplicationController@getResScheduling',
    'as'=>'get-res-scheduler'
]);

Route::post('create-res-install-job', [
    'uses'=>'ApplicationController@postCreateResInstallJob',
    'as'=>'post-create-res-install-job'
]);

//Job admin routes-------------------------------------
Route::get('admin/resJobAdmin', [
    'uses'=>'ApplicationController@getResJobAdmin',
    'as'=>'get-res-job-admin'
]);

Route::get('admin/resJobDetails/{id}', [
    'uses'=>'ApplicationController@getResJobDetails',
    'as'=>'get-res-job-details'
]);


