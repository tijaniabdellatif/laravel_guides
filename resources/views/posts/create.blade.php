@extends('layout')

@section('content')

<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div>
        <label for="title">
            Your Title
        </label>
        <input name="title" id="title" type="text">
    </div>
    <div>
        <label for="content">
            Your content
        </label>
        <input name="content" id="content" type="text">
    </div>

    <button type="submit">Add Post</button>
</form>
    
@endsection