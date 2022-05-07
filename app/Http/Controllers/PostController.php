<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
  public function index()
  {
    $posts = [
      'Mon super premier titre',
      'Mon super second titre'
    ];

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
  
}
