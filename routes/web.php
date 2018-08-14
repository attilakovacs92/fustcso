<?php

Route::get('sitemap.xml', ['uses' => 'SitemapsController@index']);

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
    Route::get('/', [ 'as' => 'pages.index', 'uses' => 'PagesController@index']);
});

//Mail
Route::post('email', ['as'	=> 'mail.contact', 'uses' => 'MailsController@sendMailToSupport']);


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
