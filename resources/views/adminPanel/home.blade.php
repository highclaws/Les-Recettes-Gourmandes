@extends('layouts.template')

@section('title', 'Blog Admin Panel')

@section('content')


<div class="nav navbar-nav pull-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        {{ Auth::user()->name }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">            Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
</div>
<h1>Admin Panel</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary pull-right">add new blog post</a>
                <br><br><br>
<table class="table">
    <thead>
        <th>id</th>
        <th>title</th>
        <th>body</th>
        <th>edit</th>
        <th>delete</th>
    </thead>
    <tbody>
    @foreach($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->body }}</td>
        <td>edit button</td>
        <td>delete button</td>
    </tr>
    @endforeach
        <th>sample post id</th>
        <td>post title sample</td>
        <td>content</td>
        <td>edit button</td>
        <td>delete button</td>
    </tbody>
</table>
@endsection