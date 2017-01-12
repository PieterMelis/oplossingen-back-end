<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Comment;
use App\Article;

class CommentController extends Controller
{

  public function index(Request $request,$id)
     {
       $article = Article::findOrFail($id);
       $comments = Comment::all();

       return view("comments/comment", compact('article', 'comments'));
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
