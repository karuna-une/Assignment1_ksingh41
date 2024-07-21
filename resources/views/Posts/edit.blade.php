@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Post</h1>
    
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $post->title) }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" id="content" class="form-control">{{ old('content', $post->content) }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection
