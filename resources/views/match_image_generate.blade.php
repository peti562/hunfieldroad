@extends('layouts.master')

@section('main-content')
    <div class="row" style="background: white;">
        {{Form::open(['route' => 'generator', 'files' => true])}}
            {{ csrf_field() }}
            <input type="hidden" id="competition" name="competition" value="epl"/>

            <div class="col l12 col m12">
                <label for="home_team">Home Team</label>
                <select name="home_team" id="home_team">
                    @foreach($clubs as $club)
                        <option value="{{$club->TID}}" id="home_{{$club->FDCOUK}}">{{$club->FDCOUK}}</option>
                    @endforeach
                </select>
            </div>

         {{--   <div class="col l12 col m12">
                <label for="home_team">Home Team</label>
                <select name="home_team" id="home_team">
                        <option value="64" id="home_Liverpool" data-content="http://upload.wikimedia.org/wikipedia/de/0/0a/FC_Liverpool.svg">Liverpool</option>
                </select>
            </div>--}}

            <div class="col l12 col m12">
                <label for="away_team">Away Team</label>
                <select name="away_team" id="away_team">
                    @foreach($clubs as $club)
                        <option value="{{$club->TID}}" id="away_{{$club->FDCOUK}}" data-content="{{$club->Logo_url}}">{{$club->FDCOUK}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col l12 col m12">
                <label for="home_team_goals">Home Team goals</label>
                <input type="number" id="home_team_goals" name="home_team_goals"/>
            </div>

            <div class="col l12 col m12">
                <label for="away_team_goals">Away Team goals</label>
                <input type="number" id="away_team_goals" name="away_team_goals"/>
            </div>

        

            <div class="col l12 col m12">
                <label for="competition">Versenysorozat</label>
                <select name="competition" id="competition">
                    <option value="epl" id="epl">Premier League</option>
                    <option value="ucl" id="ucl">Bajnokok Ligája</option>
                </select>
            </div>


            {{Form::label('background_image', 'Háttérkép',['class' => 'control-label'])}}
            {{Form::file('background_image')}}
            {{Form::submit('Uzsgyi!', ['class' => 'btn btn-danger'])}}
        {{Form::close()}}

    </div>


@endsection