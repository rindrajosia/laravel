@extends('layouts.app')

@section('content')
    <h1>Mes articles</h1>

    @if($posts->count() > 0)
      @foreach($posts as $post)
        <h2><a href="#">{{ $post->title }}</a></h2>
      @endforeach
    @else
      <span>Pas d'article</span>
    @endif

@endsection
