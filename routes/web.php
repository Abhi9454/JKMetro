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
Route::get('/','AuthController@showlogin')->name('LOGIN');
Route::post('/','AuthController@login')->name('LOGIN.SUBMIT');
Route::get('/home','NewsController@showHome')->name('HOME.USERDASHBOARD');
Route::get('/logout','AuthController@logout')->name('LOGOUT');
Route::get('/addarticle','NewsController@showAddArticle')->name('HOME.ADDARTICLE');
Route::post('/addarticle','NewsController@addArticle')->name('HOME.SUBMITADDARTICLE');
Route::get('/editarticle/{id}','NewsController@showEditArticle')->name('HOME.SHOWEDITARTICLE');
Route::post('/editarticlesubmit','NewsController@editArticle')->name('HOME.SUBMITEDITARTICLE');
Route::get('/allusers','NewsController@showUsers')->name('HOME.ALLUSERS');
Route::get('/allarticles','NewsController@showArticles')->name('HOME.SHOWARTICLES');
Route::get('/category','NewsController@showCategory')->name('HOME.ALLCATEGORY');
Route::post('/category','NewsController@addCategory')->name('HOME.ADDCATEGORY');
Route::get('/deletearticle/{id}','NewsController@deleteArticle')->name('HOME.DELETEARTICLE');