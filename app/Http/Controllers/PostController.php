<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();

    return view('articles', compact('posts'));
  }

  public function show($id)
  {
    $posts = [
      'Mon super premier titre',
      'Mon super second titre'
    ];

    $post = $posts[$id] ?? 'Pas de title';

    return view('article', [
      'post' => $post
    ]);
  }

  public function contact()
  {
    return view('contact');
  }

}
