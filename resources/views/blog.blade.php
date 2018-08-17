@extends('layouts.app')
@section('search')
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
@endsection
@section('content')
<div class="row" style="padding-top:70px;">
    <div class="col-sm-2">
            <a href="/blogs/create" class="btn btn-primary">Create New Blog</a>
    </div>
    <div class="col-sm-7" >
        @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="card" style="margin-bottom:20px;" >
                    <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{!!str_limit($post->body,$limit = 1000,$end='....')!!}</p>
                    <p class="card-text">{{$post->created_at}}</p>
                    <a href="/blogs/{{$post->id}}" class="btn btn-primary">Show Detail</a>
                    @if(!Auth::guest())
                    <a href="/blogs/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                   
                    {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                    {!!Form::close()!!}
                    @endif
                    </div>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    </div>
    <div class="col-sm-3"></div>
  </div>
@endsection