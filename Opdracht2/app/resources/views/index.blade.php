@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Article overview</div>
                <div class="panel-body">
                  @if(Auth::user())
                  @foreach ($articles as $article)
                    <div class="vote">
                     <div class="form-inline upvote"><button class="up-down">
                         <i class="fa fa-caret-up"></i></button>&nbsp;
                     </div>
                     <div class="form-inline downvote"><button class="up-down">
                        <i class="fa fa-caret-down"></i></button>&nbsp;
                     </div>
                   </div>
                    <div class="url">
                      <a href="{{$article->url}}" class="urlTitle">{{$article->title}}</a>
                      @if(isset(Auth::user()->name))
                        @if(Auth::user()->name == $article->posted_by)
                      <a href="articles/edit/{{$article->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                    @endif
                    @endif
                    </div>
                    <div class="info">
                          {{$article->votes}} points | posted by {{{$article->posted_by}}}
                          <?php $nrOfComments = 0 ;?>
                      @foreach($comments as $comment)
                        @if($comment->posted_article == $article->id)
                          <?php $nrOfComments++; ?>
                        @endif
                      @endforeach
                      | <a href="comments/{{$article->id}}">{{$nrOfComments}} comments</a>
                    </div>
                  @endforeach
                  @else
                  @foreach ($articles as $article)
                      <div class="vote">
                       <div class="form-inline upvote"><button class="up-down disabled" disabled>
                           <i class="fa fa-caret-up" ></i></button>&nbsp;
                       </div>
                       <div class="form-inline downvote" ><button class="up-down disabled" disabled>
                          <i class="fa fa-caret-down"></i></button>&nbsp;
                       </div>
                     </div>
                      <div class="url">
                        <a href="{{$article->url}}" class="urlTitle"><h3>{{$article->title}}</h3></a>
                      </div>
                      <div class="info">
                        {{$article->votes}} points | posted by {{{$article->posted_by}}} |<a href="comments/{{$article->id}}"> comments</a>
                      </div>
                     @endforeach
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
