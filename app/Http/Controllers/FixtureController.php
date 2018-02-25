<?php

namespace App\Http\Controllers;

use App\Fixture;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index()
    {
      $teamNames = Fixture::getTeamNames();

      return view('layouts.home.main-page');
    }



}
