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

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use App\Article;

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {

  $articles = Article::orderBy('created_at','asc')->get();
   return view('/home',[
        'articles' => $articles
    ]);

});


Route::get('/article', function () {
    return view('article');
});
Route::get('/instructies', function () {
    return view('instructies');
});

Route::post('/add', 'ArticleController@create');

Route::get('edit/{id}', 'ArticleController@edit');
