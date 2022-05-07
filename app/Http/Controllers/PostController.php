<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
  public function index()
  {
    $title = 'Mon super premier titre';
    $title2 = 'Mon super second titre';
    return view('articles', [
      'title' => $title,
      'title2' => $title2
    ]);
  }
}
