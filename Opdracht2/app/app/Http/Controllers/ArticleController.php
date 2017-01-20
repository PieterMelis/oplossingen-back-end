<?php

namespace App\Http\Controllers;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Article;
use resources\views\articles;
use App\User;
class ArticleController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $articles = Article::all();
      return view('/')->withArticles($articles);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $validator = Validator::make($request->all(), [
             'title' => 'required|max:255',
             'url' => 'required|max:255'
         ]);
         if ($validator->fails()) {
             return redirect('/articles/add')
                 ->withErrors($validator);
         }
         $article = new Article;
         $article->title = $request->title;
         $article->url = $request->url;

         $article->votes = 0;
         $article->posted_by = Auth::user()->name;
         $article->save();
         return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $article = Article::findOrFail($id);

      return view("articles/edit", compact('article'));

    }
    public function update($id, Request $request)
    {
      $article = Article::findOrFail($id);

      $article->update($request->all());
       return redirect('/');
    }
    public function delete($id, Request $request)
    {
      $article = Article::findOrFail($id);

      $article->delete($request->all());

      return redirect('/');
    }
}
