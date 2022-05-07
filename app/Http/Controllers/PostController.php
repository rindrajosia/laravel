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
}
