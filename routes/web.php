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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home/lescmd', 'HomeController@add')->name('addelem');
Route::post('/home/articles', 'HomeController@addart')->name('addarticles');
Route::post('/home/publicites', 'HomeController@addad')->name('addads');
Route::post('/home/', 'HomeController@addadxml')->name('addadsxml');
Route::post('/home/sendmessages', 'HomeController@sendsms')->name('sendmessages');
Route::post('/home/sendmails', 'HomeController@sendmail')->name('sendemails');
Route::post('/home/commandes', 'AssistantController@addcmd')->name('addcommandes');
//Route::post('/home/all', 'AssistantController@valider')->name('validate');
// Route::get('/home/add', 'HomeController@index');
// Route::get('/home', 'HomeController@index')->name('login');
// Route::get('/prospection', 'HomeController@index')->name('prospection');
