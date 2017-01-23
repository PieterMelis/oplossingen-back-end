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
                  <div class="panel-heading">Edit Comment</div>

                 <form action="{{$comment->id}}" method="post" class="form-horizontal">
                   {{ csrf_field() }}
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

                     <div class="form-group">
                       <label for="comment" class="col-sm-3 control-label"></label>
                       <div class="col-sm-6">
                           <input type="text" name="comment" id="comment" class="form-control" value="{{$comment->comment}}">
                       </div>
                     </div>

                     <div class="form-group">
                         <div class="col-sm-offset-3 col-sm-6">
                             <button type="submit" class="btn btn-default">
                                 <i class="fa fa-plus"></i> Edit Comment
                             </button>
                         </div>
                     </div>
                 </form>
                  </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

      @else
      Not logged in!
    @endif

@endsection
