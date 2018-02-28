<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
  public function clubs(Club $club){
    $clubs = $club->get();

    return view('match_image_generate', compact('clubs'));
  }


  public function generateResult(Club $club, Request $request)
  {
    $home_team_crest = $club->teamCrest($request['home_team'])->pluck('Logo_url')->first();
    $away_team_crest = $club->teamCrest($request['away_team'])->pluck('Logo_url')->first();

    $data = [
      'competition' => $request['competition'],
      'home_team' => $request['home_team'],
      'home_team_crest' => $home_team_crest,
      'away_team' => $request['away_team'],
      'away_team_crest' => $away_team_crest,
      'away_team_goals' => $request['away_team_goals'],
      'home_team_goals' => $request['home_team_goals'],
      'background_image' => 'http://192.168.10.10/storage/generator/backgrounds/blank.jpg',
      'colors' => [
        'block' => '#8a1717',
        'lineabove' => '#ffffff',
        'ribbon' => '#ffe400',
        'result' => '#ffffff',
        'ribbontext' => '#000000',
        'social' => '#ffffff',
      ]
      ];
    


    return view('match_image_output', compact('data'));
  }


}
