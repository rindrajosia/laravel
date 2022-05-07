@extends('layouts.app')

@section('content')
    <h1>Mes articles</h1>

    @foreach($posts as $post)
      <h2>{{ $post }}</h2>
    @endforeach

@endsection
