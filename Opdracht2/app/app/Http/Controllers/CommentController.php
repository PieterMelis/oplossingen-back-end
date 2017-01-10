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
       $comments = Comment::orderBy('created_at','asc')->get();

       return view("comments/comment", compact('article', 'comments'));
     }

     public function create(Request $request)
     {
          $validator = Validator::make($request->all(), [
              'comment' => 'required|max:255'
          ]);

          $comment = new Comment;
          $comment->name = $request->name;
          $comment->comment = $request->comment;
          $comment->save();

          return redirect()->back();

     }



}
