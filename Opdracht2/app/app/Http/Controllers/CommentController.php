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

       $articles = Article::all();
       $comment = Comment::all();
       $user = User::all();

       $comment->name = $request->name;
       $comment->posted_article = $request->id;

       $articles->id = $id;
       $articles->url = $request->url;
       $articles->title = $request->title;
       $articles->posted_by = $request->name;
       $articles->votes = 1;
       return view("comments/comment")
         ->withArticles($articles)
         ->withComments($comment);
     }

     public function create(Request $request, $id)
     {
        $user = User::all();

        $this->validate($request, [
        'comment' => 'required|max:255',
    ]);



          $comment = new Comment;
          $comment->name = Auth::user()->name;
          $comment->comment = $request->comment;
          $comment->posted_article = $id;
          $comment->save();

          return redirect()->back();

     }
     public function edit($id)
     {
        $comment = Comment::findOrFail($id);

       return view("comments/edit", compact('comment'));

     }
     public function update(Request $request, $id)
     {
       $comment = Comment::findOrFail($id);
       $comment->comment = $request->comment;;
       $comment->update($request->all());
       return redirect()->back();
     }
     public function del(Request $request, $id)
     {
       $comment = Comment::findOrFail($id);

      return view("comments/del", compact('comment'));

     }
     public function delete(Request $request, $id)
     {
       $comment = Comment::findOrFail($id);

       $comment->delete($request->all());
       return redirect('/');
     }



}
