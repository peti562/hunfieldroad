<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Fixture extends Model
{
    public static function selectHomeTeam()
    {
      return DB::table('fixtures')->where('HomeTeam', 'Liverpool')->get();
    }
    public static function getTeamNames()
    {
      return DB::table('fixtures')->pluck('HomeTeam')->unique()->sort();
    }
    public function comparing($request)
    {
      $matches = DB::table('fixtures')
        ->where('HomeTeam', $request['home_team'])
        ->where('AwayTeam', $request['away_team'])
        ->where('Season', '>', $request['start_season'])
        ->where('Season', '<', $request['end_season'])
        ->get();

      return $matches;
    }
}
