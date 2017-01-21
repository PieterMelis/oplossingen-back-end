<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;
use App\User;
use Auth;
use Illuminate\Support\Facades\URL;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(request $request)
     {
       $user = User::all();
       $article = Article::all();
       $comment = Comment::all();

       $article->votes = 1;
       $user->name = $request->name;
       return view('index')
       ->withArticles($article)
       ->withComments($comment);
     }
}
