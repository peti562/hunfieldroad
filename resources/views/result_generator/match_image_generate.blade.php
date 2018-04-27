{{--@extends('layouts.index')--}}
@extends ('voyager::master')

@section('content')
    <div class="s">
        {{Form::open(['route' => 'generator', 'files' => true])}}
            {{ csrf_field() }}
            <input type="hidden" id="competition" name="competition" value="epl"/>
            <input type="hidden" id="template_id" name="template_id" value="1"/>

            <div class="col l12 m12">
                <label for="team_a">Első Csapat</label>
                <select name="team_a" id="team_a" disabled="disabled">
                    @foreach($clubs as $club)
                        @if($club->TID == 64)
                            <option value="{{$club->TID}}" id="away_{{$club->FDCOUK}}" selected="selected" data-content="{{$club->Logo_url}}">{{$club->FDCOUK}}</option>
                        @else
                            <option value="{{$club->TID}}" id="away_{{$club->FDCOUK}}" data-content="{{$club->Logo_url}}">{{$club->FDCOUK}}</option>
                        @endif
                    @endforeach
                </select>
            </div>


            <div class="col l12 m12">
                <label for="team_b">Ellenfél</label>
                <select name="team_b" id="team_b">
                    @foreach($clubs as $club)
                        <option value="{{$club->TID}}" id="away_{{$club->FDCOUK}}" data-content="{{$club->Logo_url}}">{{$club->FDCOUK}}</option>
                    @endforeach
                </select>
            </div>

        <div class="col l6 m6">
            <label for="location">Helyszín/mez szín</label>
            <select name="location" id="location">
                <option value="home" id="home">Hazai</option>
                <option value="away" id="away">Idegenbeli - fehér</option>
                <option value="third" id="third">Idegenbeli - narancs</option>
            </select>
        </div>

        <div class="col l6 m6">
            <label for="competition">Versenysorozat</label>
            <select name="competition" id="competition">
                <option value="epl" id="epl">Premier League</option>
                <option value="ucl" id="ucl">Bajnokok Ligája</option>
            </select>
        </div>

            <div class="col l6 col m6">
                <label for="team_a_goals">Liverpool gólok</label>
                <input type="number" id="team_a_goals" name="team_a_goals"/>
            </div>

            <div class="col l6 col m6">
                <label for="team_b_goals">Az ellenfél góljai</label>
                <input type="number" id="team_b_goals" name="team_b_goals"/>
            </div>




            <div class="col l12 m12">
                {{Form::label('background_image', 'Háttérkép',['class' => 'control-label', 'required' =>'required'])}}
                {{Form::file('background_image')}}
                {{Form::submit('Uzsgyi!', ['class' => 'btn btn-danger'])}}
                {{Form::close()}}
            </div>



    </div>


@endsection