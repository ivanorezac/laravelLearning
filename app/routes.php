<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('hello');
});

Route::get('/about', array('as' => 'profile', 'uses' => 'HomeController@showAbout'));

Route::get('/art/{art}/specialty/{specialty}', array('as' => 'arts',
    'before' => 'ageOld:41|ageYoung:41',
    function($art, $specialty)
    {
        return 'Holy fuck it works! Art and category are:'.$art.' '.$specialty;
}));

