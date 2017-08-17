@extends('layouts.template')
@section('title', 'Edit Post #' . $post->id)
@section('content')
<h1>Edit Post #{{ $post->id }}</h1>
<div class="col-sm8 col-sm-offset-2">
<form action="{{ route('posts.update', ['id'=>$post->id]) }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label for="title">Title:</label>
        <input type="title" name="title" value="{{ $post->title }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="body">Body:</label>
        <textarea name="body" id rows="10" cols="30" class="form-control">{{ $post->body }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('posts.index'')'" class="btn btn-default pull-right">Go Back</a>
</form>
</div>
@endsection