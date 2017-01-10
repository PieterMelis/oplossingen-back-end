<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentController extends Controller
{

  public function index(Request $request,$id)
     {
       $article = Article::findOrFail($id);

       return view("comments/comment", compact('article'));
     }

}
