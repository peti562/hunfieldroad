@extends('layouts.index')

@section('content')
    <div class="row">
        @include('layouts.home.news_slider')

    </div>
            @include('layouts.home.news_box_horizontal')

        <div class="row">
            @include('layouts.home.news_box_vertical', array('offset'=> '4', 'limit' => '4'))
        </div>
    </div>

    <div class="row">
        @include('partials.random-quotes')
    </div>






        <div class="row">
            <div class="col l9 col m12 col s12 no-padding" style="background: white;">
                @include('partials.mini-table')
            </div>

            @include('layouts.home.news_box_vertical', array('offset'=> '9', 'limit' => '2'))
        </div>
    @endsection