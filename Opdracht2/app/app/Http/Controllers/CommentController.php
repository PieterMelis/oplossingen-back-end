<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Comment;
use App\Article;
use App\User;
use Auth;

class CommentController extends Controller
{

  public function index(Request $request,$id)
     {

       $article = Article::all();
       $comment = Comment::all();
       $user = User::all();
       $comment->name = $request->name;
       $comment->post_id = $request->id;
       $article->id = $id;
       $article->url = $request->url;
       $article->title = $request->title;
       $article->posted_by = $request->name;
       $article->votes = 1;
       return view("comments/comment")
         ->withArticles($article)
         ->withComments($comment);
     }

     public function create(Request $request)
     {
          $validator = Validator::make($request->all(), [
              'comment' => 'required|max:255'
          ]);


          $comment = new Comment;
          $comment->name = "pieter";
          $comment->comment = $request->comment;
          $comment->posted_by = 1;
          $comment->save();

          return redirect()->back();

     }



}
