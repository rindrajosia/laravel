@extends('layouts.app')

@section('content')
  <form method="POST" action="{{route('post.store')}}">
    @csrf
    <input type="text" name="title" class="border-gray-600 border-2"><br><br>
    <textarea name="content" class="border-gray-600 border-2" rows="4" cols="50">

    </textarea><br><br>
    <button type="submit" class="bg-cyan-500">Submit</button>
  </form>

@endsection
