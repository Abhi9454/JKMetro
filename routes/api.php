<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('getallarticleslist', 'API\mNewsController@getAllArticleList');
Route::post('getidarticle', 'API\mNewsController@getIdArticle');
Route::post('getsports', 'API\mNewsController@getSportsArticle');
Route::post('getheadarticle', 'API\mNewsController@getHeadArticle');
Route::post('getcategory', 'API\mNewsController@getCategories');
Route::post('getallarticlejammu', 'API\mNewsController@getJammu');
Route::post('getallarticlenational', 'API\mNewsController@getNational');
Route::post('getallarticleinternational', 'API\mNewsController@getInternational');
Route::post('getallarticlesports', 'API\mNewsController@getSports');
Route::post('getallarticleentertainment', 'API\mNewsController@getEntertainment');
Route::post('getallarticleeditorial', 'API\mNewsController@getEditorial');
Route::post('getallarticlespecial', 'API\mNewsController@getspecial');
