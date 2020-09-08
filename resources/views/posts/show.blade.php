@extends('layout')

@section('content')
  <h1>POST Page</h1>
  
<h2>{!! $data['title'] !!}</h2> by <p>{{ $author}}</p>
      
@endsection
