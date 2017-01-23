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
                    <div class="panel-heading">Edit Article
                      <a href="{{$article->id}}/delete" class="btn btn-danger btn-xs pull-right">
                          <i class="fa fa-btn fa-trash" title="delete"></i> delete article
                      </a>
                    </div>

                     <form action="{{$article->id}}" method="post" class="form-horizontal">
                       {{ csrf_field() }}
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">

                         <div class="form-group">
                           <label for="titel" class="col-sm-3 control-label">Title (max 255 )</label>
                           <div class="col-sm-6">
                               <input type="text" name="title" id="title" class="form-control" value="{{$article->title}}">
                           </div>
                         </div>

                         <div class="form-group">
                           <label for="url" class="col-sm-3 control-label">URL</label>
                           <div class="col-sm-6">
                               <input type="text" name="url" id="url" class="form-control" value="{{$article->url}}">
                           </div>
                         </div>

                         <div class="form-group">
                             <div class="col-sm-offset-3 col-sm-6">
                                 <button type="submit" class="btn btn-default">
                                     <i class="fa fa-plus"></i> Edit Article
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
