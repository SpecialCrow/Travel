@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    <img style="width:100%"src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <br><br>
    
    <div>
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user['name']}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <div class="d-flex pt-2 justify-content-between">
        <div>
                <a href="/posts" class="btn btn-primary">Go back</a>
        </div>
        <div class="d-flex pb-5">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary mr-2">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
              
                {!!Form::close()!!}
        </div>
    </div>
    @endif
    @endif
   
@endsection