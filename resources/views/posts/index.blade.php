@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between">
    <div class="">
            <h1>All my latest Posts</h1>
    </div>
    @if(!Auth::guest())
    <div>
            <a href="/posts/create" class="btn btn-primary ">Create Post</a>
    </div>
    @endif
</div>
@if(count($posts) > 0)
    
    @foreach ($posts as $post)
    <div class="well pt-4">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <img style="width:100%"src="/storage/cover_images/{{$post->cover_image}}" alt="">
            </div>
            <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written on {{ $post->created_at }} by {{$post->user['name']}}</small>
                </div>
        </div>
    </div>
    @endforeach
@else
    <p>No post found </p>
@endif
@endsection