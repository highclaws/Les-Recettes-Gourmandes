@extends('layouts.publicHomePageTemplate')

@section('title', 'Blog Public Home Page')

@section('content')
<div>
    @foreach($posts as $post)
            <div class="well well-lg">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>
                <br>
                <br>
                <p>Poste ajouté le: {{ (($post->created_at)) }}</p>
                <a href="{{ route('posts.show',['id'=>$post->id]) }}" class="btn btn-default pull-right">view Post</a>
            &nbsp;
            </div>
    @endforeach
        </div>
        <div class="row text-center">
        {{ $posts->links() }}
        </div>
</div>
    
@endsection
