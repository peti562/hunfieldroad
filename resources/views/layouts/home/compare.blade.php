@extends('layouts.index')

@section('content')
    <div class="row">
        <form action="{{env('APP_URL')}}comparing" method="GET">
            <div class="col l6 col m12">
                <select name="home_team" id="home_team">
                    @foreach($data['team_names'] as $team_name)
                        @if($team_name==$data['home_team'])
                            <option value="{{$team_name}}" selected="selected">{{$team_name}}</option>
                        @else
                        <option value="{{$team_name}}">{{$team_name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col l6 col m12">
                <select name="away_team" id="away_team">
                    @foreach($data['team_names'] as $team_name)
                        @if($team_name==$data['away_team'])
                            <option value="{{$team_name}}" selected="selected">{{$team_name}}</option>
                        @else
                        <option value="{{$team_name}}">{{$team_name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <button type="submit"> Submit</button>
        </form>

        <div class="col l12 col m12">
                @foreach($data['matches'] as $match)
                    <div class="row">
                    {{$match->Season}}
                    {{$match->HomeTeam}}  -  {{$match->AwayTeam}}
                    {{$match->HomeGoals}}   /   {{$match->AwayGoals}}
                    </div>
                @endforeach
        </div>
    </div>

@endsection