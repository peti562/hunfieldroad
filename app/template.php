<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class template extends Model
{
  public function scopeGetTemplate ($query, $template_id) {
    return $query->where('template_id', $template_id);
  }
}
