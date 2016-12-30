<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('home');
});
Route::get('/article', function () {
    return view('article');
});
Route::get('/instructies', function () {
    return view('instructies');
});
Route::post('/add', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'tilel' => 'required|max:255',
        'url' => 'required|max:255'
    ]);

    if ($validator->fails()) {
        return redirect('/article')
            ->withInput()
            ->withErrors($validator);
    }
    return view('home');
});
