@extends('layouts.app')

@section('content')
<<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Article overview</div>

                <div class="panel-body">
                  @if(Auth::user())
                   <tr>
                     <div >
                        <h3>{{$article->title}}</h3>
                      </div>
                      <div>
                        <!--  Placeholder for later data -->
                         0 points | posted by  | x comments
                      </div>
                   </tr>
                   

                  @else
                  Not logged in!
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
