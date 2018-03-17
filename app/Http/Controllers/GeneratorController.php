<?php

namespace App\Http\Controllers;

use App\Club;
use App\template;
use Illuminate\Http\Request;

class GeneratorController extends Controller
{
  public function clubs(Club $club){
    $clubs = $club->get();

    return view('match_image_generate', compact('clubs'));
  }


  public function generateResult(Club $club, Request $request, Template $template)
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

    if ($request['home_team'] != 64 && $request['away_team'] != 64)
    {
      dump('hello');
      return redirect()->route('generating');
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
      'template' => $this->template($request['template_id'], $template),
      ];

    $location = $request['home_team'] == 64 ? 'home' : 'away';
    $focus_team = '64';
    $data['colors'] = $this->getColors($focus_team, $location, $club);
   // dd($data['template']);
    return view('match_image_output', compact('data'));
  }

  public function template($template_id, $template) {
    $elements = $template->getTemplate($template_id)->get();
    $templateData=[];
    foreach($elements as $element){
      $templateData[$element['object_name']][$element['point']]['x'] = $element['x'];
      $templateData[$element['object_name']][$element['point']]['y'] = $element['y'];
    }
    return $templateData;
  }

   public function crestUrl($team, $club){
       $FDCOUK = $club->team($team)->pluck('FDCOUK')->first();
       //dump(url('result_generator/club_crests/england/'.$FDCOUK.'.svg'));
       return url('result_generator/club_crests/england/'.$FDCOUK.'.svg');
   }

  public function getColors($team, $location, $club){
    $teamData = $club->team($team)->get();
    return [
      'block'      => $teamData[0][$location.'_block'],
      'lineabove'  => $teamData[0][$location.'_lineabove'],
      'ribbon'     => $teamData[0][$location.'_ribbon'],
      'result'     => $teamData[0][$location.'_result'],
      'ribbontext' => $teamData[0][$location.'_ribbontext'],
      'social'     => $teamData[0][$location.'_social'],
    ];
  }

}
