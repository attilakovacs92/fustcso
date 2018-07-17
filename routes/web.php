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
Route::group(
[
    'prefix' => LaravelLocalization::setLocale(), 
    'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], 
function()
{
    //Route::get('/', function () {
        //return view('welcome');
    //});
    Route::get('/', 'PagesController@index');
});

//Mail
Route::post('email', ['as'	=> 'mail.contact', 'uses' => 'MailsController@sendMailToSupport']);


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
