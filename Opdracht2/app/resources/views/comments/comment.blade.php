@extends('layouts.app')

@section('content')
<<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Article overview</div>
                @include("E.errors")
                <div class="panel-body">

                  @if(Auth::user())

                   <tr>
                     <div >
                        <h3>{{$article->title}}</h3>
                      </div>
                      <div>

                        {{$article->votes}} points | posted by {{{$article->posted_by}}} |comments</a>
                      </div>
                   </tr>

                   @foreach ($comments as $comment)
                     <div class="comments">
                       <ul>
                         <li>
                             <div class="comment-body">{{$comment->comment}}</div>
                             <div class="comment-info">
                                 Posted by {{$comment->name}} on {{$comment->created_at}}
                             </div>
                         </li>
                       </ul>
                    </div>
                    @endforeach
                    <form action="./add/{{$article->id}}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                      <label for="body" class="col-sm-3 control-label">Comment</label>
                      <div class="col-sm-6">
                        <textarea type="text" name="comment" id="comment" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                              <i class="fa fa-plus"></i>   Add comment
                            </button>
                        </div>
                    </div>
                  </form>
                  @else
                  Not logged in!
                  @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
