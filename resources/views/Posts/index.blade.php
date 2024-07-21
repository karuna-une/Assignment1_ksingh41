@extends('layouts.app')

@section('content')
    <style>
        /* (Place the above CSS here) */
    </style>
    <div class="container">
        <h1>Blog Posts</h1>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">Create Post</a>
        <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-secondary">Edit</a>
                    
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach      
        </ul>
    </div>
@endsection
