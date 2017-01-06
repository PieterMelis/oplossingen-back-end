@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  @if(Auth::user())
                  @foreach ($articles as $article)
                               <tr>

                                   <td class="table-text">
                                       <h3><a href="{{$article->url}}">{{ $article->title }}</a></h3>
                                   </td>


                                   <td>
                                       <form action="/edit/{{$article->id}}" method="POST">
                                           {{ csrf_field() }}

                                           <button>edit</button>
                                       </form>
                                   </td>
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
