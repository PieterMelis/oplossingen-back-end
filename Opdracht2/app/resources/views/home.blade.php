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
                   <tr>

                     <div >
                        <a href="{{$article->url}}" class="urlTitle"><h3>{{$article->title}}</h3></a>
                        <a href="articles/edit/{{$article->id}}" class="btn btn-primary btn-xs edit-btn">edit</a>
                      </div>
                      <div>
                        <!--  Placeholder for later data -->
                         0 points | posted by  |<a href="comments/{{$article->id}}">x comments</a>
                      </div>
                   </tr>
                   @endforeach
                  @else
                  Not logged in!
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
