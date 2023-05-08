@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="list-group">
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-md-4 col-sm-4" style="display: flex; align-items: center;">
                            <img style="width:30%" src="/storage/cover_images/{{$post->cover_image}}">
                            <div style="margin-left: 5px;">
                                <h3 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                            </div>
                        </div>
                    <div>
                </li>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post was found!</p>
    @endif
@endsection
