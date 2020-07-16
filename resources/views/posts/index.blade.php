@extends('layouts.app')

@section('content')
    <h1>hello world index </h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h3><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h3>
                    <small>create at: {{$post->created_at}}</small>
                </li>
            </ul>
                
            </div>
        @endforeach
    @else
     <h3>no posts</h3>
    @endif
@endsection

