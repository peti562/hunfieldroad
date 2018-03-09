<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
  public function scopeTeam ($query, $tid) {
    return $query->where('TID', $tid);
  }
}
