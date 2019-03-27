@extends('layouts/main')
@section('content')
<h1>Ansuf yisswen</h1>
<ul>
    @foreach( $posts as $post)
  
 <li><a href="/Articles/{{$post->post_name}}"> {{$post->post_name}}</a></li>
    
    @endforeach
</ul>
@endsection