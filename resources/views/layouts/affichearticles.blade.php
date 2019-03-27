@extends('layouts/main')
@section('contentAuth')
<h1>{{$post->author->name}}</h1>
@endsection
@section('contentArtic')
<p>{{$post->post_content}}</p>
<a href="/"> Retourner à l'accueil</p>
@endsection