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
    /*$this->validate($request, [
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);*/

    if ($request->file())
    {
      $image = $request->file('background_image');

      $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

      $destinationPath = public_path('/images/match_result_images');

      $image->move($destinationPath, $input['imagename']);

      $imageURL = url('images/match_result_images/'.$input['imagename']);
    } else {
      $imageURL = 'https://d3j2s6hdd6a7rg.cloudfront.net/v2/uploads/media/default/0001/58/thumb_57208_default_news_size_5.jpeg';
    }



    $home_team_crest = $this->crestUrl($request['home_team'], $club);
    $away_team_crest = $this->crestUrl($request['away_team'], $club);

    $data = [
      'competition' => $request['competition'],
      'home_team' => $request['home_team'],
      'home_team_crest' => $home_team_crest,
      'away_team' => $request['away_team'],
      'away_team_crest' => $away_team_crest,
      'away_team_goals' => $request['away_team_goals'],
      'home_team_goals' => $request['home_team_goals'],
      'background_image' => $imageURL,
      'ucl_image' => $request['competition']=='ucl' ? url('images/ucl.png') : '',
      ];

    if ($request['home_team']==64)
    {
      $data['colors'] = [
        'block' => '#8a1717',
        'lineabove' => '#ffffff',
        'ribbon' => '#ffe400',
        'result' => '#ffffff',
        'ribbontext' => '#000000',
        'social' => '#ffffff',
      ];
    } else if ($request['away_team']==64) {
      $data['colors'] = [
        'block' => '#373737',
        'lineabove' => '#ffffff',
        'ribbon' => '#FB673F',
        'result' => '#FB673F',
        'ribbontext' => '#000',
        'social' => '#FB673F',
      ];
    }
    


    return view('match_image_output', compact('data'));
  }

   public function crestUrl($team, $club){
       $teamName = $club->team($team)->pluck('FDCOUK')->first();
       return url('result_generator/club_crests/england/'.$teamName.'.svg');
   }

}
