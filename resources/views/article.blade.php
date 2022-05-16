@extends('layouts.app')

@section('content')
    <h1>Mon article</h1>
    <h2>{{ $post->content }}</h2>

    @forelse($post->comments as $comment)
      <span>{{ $comment->content }}</span>
    @empty
      <span>Aucun commentaire pour ce post</span>
    @endforelse

    @forelse($post->tags as $tag)
      <span>{{ $tag->name }}</span>
      @empty
        <span>Aucun tag pour ce post</span>
      @endforelse

@endsection
