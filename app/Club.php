<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
  public function scopeTeamCrest ($query, $tid) {
    return $query->where('TID', $tid);
  }
}
