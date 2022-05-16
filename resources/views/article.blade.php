@extends('layouts.app')

@section('content')
    <h1>Mon article</h1>
    <h2>{{ $post->content }}</h2>

    @forelse($post->comments as $comment)
      <span>{{ $comment->content }}</span>
    @empty
      <span>Aucun commentaire pour ce post</span>
    @forelse

@endsection
