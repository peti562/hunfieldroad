<?php

namespace App\Http\Controllers;

use App\Fixture;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function compare()
    {
      $data = [
        'team_names' => Fixture::getTeamNames(),
      ];
      return view('layouts.home.compare', compact('data'));
    }

    public function compareWithTeams(Fixture $fixture)
    {
      $data = [
        'home_team' => $_GET['home_team'],
        'away_team' => $_GET['away_team'],
        'team_names' => Fixture::getTeamNames(),
      ];

      $compareData = [
        'home_team' => $_GET['home_team'],
        'away_team' => $_GET['away_team'],
        'start_season' => '1948',
        'end_season' => '1978',
      ];
      $data['matches'] = $fixture->comparing($compareData);

      return view('layouts.home.compare', compact('team_names', 'data'));
    }

}
