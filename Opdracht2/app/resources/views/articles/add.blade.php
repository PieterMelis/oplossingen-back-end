@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add article </div>
                @if(Auth::user())
                  <div class="panel-body">
                   <form action="/articles/add" method="POST" class="form-horizontal">
                      {!! csrf_field() !!}
                      <div class="form-group">
                          <label for="title" class="col-sm-3 control-label">Title (max 255 chars)</label>
                          <div class="col-sm-6">
                              <input type="text" name="title" id="title" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="url" class="col-sm-3 control-label">URL</label>
                          <div class="col-sm-6">
                              <input type="url" name="url" id="url" class="form-control">
                          </div>
                        </div>


                      <div class="form-group">
                          <div class="col-sm-offset-3 col-sm-6">
                              <button type="submit" class="btn btn-default">
                                  <i class="fa fa-plus"></i> + Add Article
                             </button>
                          </div>
                      </div>
                  </form>
                  </div>
                @else
                Not logged in!
              @endif

            </div>
        </div>
    </div>
</div>
@endsection
