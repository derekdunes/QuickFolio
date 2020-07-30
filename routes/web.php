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
Route::get('/', function () { return view('welcome'); });

Route::resource('template','TemplateController');
Route::resource('stack','StackController');
Route::resource('project','ProjectController');
Route::resource('user', 'HomeController');

Route::get('contact', 'HomeController@contact')->name('contact');
Route::get('pricing', 'HomeController@pricing')->name('pricing');
Route::get('features', 'HomeController@features')->name('features');
Route::post('sendMail', 'HomeController@sendMail')->name('sendMail');

//Route::get('user/profile', 'HomeController.edit')->name('profile');


Auth::routes();

Route::get('/preview/{id}', 'HomeController@previewTemplate')->name('preview');

Route::get('selectStack', 'HomeController@showStacks')->name('selectStack');

Route::get('createProject', 'HomeController@showProjects')->name('createProject');

Route::get('selectTemplate', 'HomeController@showTemplates')->name('selectTemplate');

Route::put('/updateStacks/{id}', 'HomeController@updateStacks')->name('updateStacks');

Route::put('/updateNewStacks/{id}', 'HomeController@updateNewStacks')->name('updateNewStacks');

Route::put('/updateProjects/{id}', 'HomeController@updateProjects')->name('updateProjects');

Route::put('/updateTemplate/{id}', 'HomeController@updateTemplate')->name('updateTemplate');




Route::get('/home', 'HomeController@index')->name('home');
