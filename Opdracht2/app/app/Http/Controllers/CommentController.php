<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentController extends Controller
{

  public function index(Request $request,$id)
     {
       $comment = Comment::all();
       $article = Article::orderBy('created_at','asc')->get();
       $article->id = $id;
       $comment->posted_by = $id;
       return view('comments/comment')
         ->withComments($comment)
         ->withArticles($article);
     }

}
