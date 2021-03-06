<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

  public static function recentFive()
  {
    return static::orderBy('id', 'desc')->take(5)->get();
  }

  public static function recents()
  {
    return static::orderBy('id', 'desc')->get();
  }

  public static function afterSlider($offset, $limit)
  {
    return static::orderBy('id', 'desc')->offset($offset)->limit($limit)->get();
  }
}
