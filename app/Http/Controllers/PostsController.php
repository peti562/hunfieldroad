<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{

  public function show(Post $post)
  {
    return view('layouts.home.show', compact('post'));
  }


}
