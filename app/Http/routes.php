<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@index');

Route::get('{n}', function($n) {
    return 'Je suis la page ' . $n . ' !';
})->where('n', '[1-3]');

Route::get('/vue1', function()
{
    return view('vue1');
});

//Route::get('article/{n}', function($n) {
//    return view('article')->with('numero', $n);
//})->where('n', '[0-9]+');
Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

Route::get('users', 'UsersController@getInfos');

Route::post('users', 'UsersController@postInfos');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');

Route::get('photo', 'PhotoController@getForm');
Route::post('photo', 'PhotoController@postForm');

Route::get('sondage', 'SondageController@index');

Route::get('sondage/vote/{idSurvey}', 'SondageController@getForm')
    ->where('idSurvey', '\w+');

Route::post('sondage/vote/{idSurvey}', 'SondageController@postForm')
    ->where('idSurvey', '\w+');

Route::get('email', 'EmailController@getForm');
Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

Route::get('commande/{n}', function($n) {
    return view('commande')->withNumero($n);
})->where('n', '[0-9]+');

Route::get('login', ['as' => 'login', function()
{
    return redirect()->route('client');
}]);

Route::get('client', ['as' => 'client', function() {
    return view('client', ['numero' => 1]);
}]);

Route::get('boutique/{n}', function($n) {
    return view('boutique', ['numero' => $n]);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function($n) {
    return view('facture')->withNumero($n);
})->where('n', '[0-9]+');