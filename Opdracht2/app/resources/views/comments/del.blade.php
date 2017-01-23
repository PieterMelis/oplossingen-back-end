@extends('layouts.app')

@section('content')

      @if(Auth::user())
        <div class="container">
            <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="breadcrumb">
               <a href="/">← back to overview</a>
            </div>
              <div class="panel panel-default">
                  <div class="panel-heading">Are you sure you want to delete this comment?
                    <a href="/" class="btn btn-xs pull-right">
                        <i class="fa fa-btn fa-trash" title="cancel"></i> cancel
                    </a>
                    <a href="{{$comment->id}}/delete" class="btn btn-danger btn-xs pull-right">
                        <i class="fa fa-btn fa-trash" title="delete"></i> delete comment
                    </a>

                  </div>



                  </div>
              </div>
          </div>
      </div>
  </div>

      @else
      Not logged in!
    @endif

@endsection
