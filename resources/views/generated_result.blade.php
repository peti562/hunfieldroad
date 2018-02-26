@extends('layouts.master')

@section('main-content')
    <div class="row" style="background: white;">

            <div style="
            width: 700px;
            height: 490px;
            background: blue url('http://192.168.10.10/storage/generator/backgrounds/eredmeny2.jpg') no-repeat;
            background-size: cover;
            padding-top:310px;
            font-family: epl-font;
            ">
                <div style="
                height: 150px;
                text-align: center;
                ">
                    <div style="
                            background: url('{{$data['home_team_crest']}}') no-repeat;
                            background-size: contain;
                            width: 100px;
                            height: 150px;
                            display: inline-block;
                            "></div>
                    <div style="
                            font-size: 100px;
                            color:white;
                            vertical-align: 46px;
                            width: 100px;
                            height: 150px;
                            text-align: right;
                            display: inline-block;
                            ">{{$data['home_team_goals']}}</div>
                    <div style="
                            font-size: 100px;
                            color:white;
                            vertical-align: 46px;
                            text-align: left;
                            height: 150px;
                            display: inline-block;
                            ">-</div>
                    <div style="
                            font-size: 100px;
                            color:white;
                            vertical-align: 46px;
                            width: 100px;
                            text-align: left;
                            height: 150px;
                            display: inline-block;
                            ">{{$data['away_team_goals']}}</div>

                    <div style="
                            background: url('{{$data['away_team_crest']}}') no-repeat;
                            background-size: contain;
                            width: 100px;
                            height: 150px;
                            display: inline-block;
                            "></div>
                </div>


            </div>
    </div>

@endsection