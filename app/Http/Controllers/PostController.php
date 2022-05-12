<?php


namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();

    return view('articles', compact('posts'));
  }

  public function show($id)
  {
    $post = Post::findOrFail($id);

    return view('article', [
      'post' => $post
    ]);
  }

  public function contact()
  {
    return view('contact');
  }

}
