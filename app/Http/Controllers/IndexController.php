<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toolkito\Larasap\SendTo;

class IndexController extends Controller
{
  public function index()
  {
    return view('layouts.home.main-page');
  }

  public function fbsend()
  {
    SendTo::Facebook(
      'link',
      [
        'link' => 'https://test',
        'message' => 'test'
      ]
    );
  }
}
