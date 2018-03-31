@extends('layouts.index')

@section('content')
    <div class="row">

        <div class="col l12 col m12 col s12">

            <!-- News Slider -->
            @include('layouts.home.news_slider')

            <ul class="pgwSliderMobile">
                @foreach($recentPostsMobile->take(3) as $recentPost)
                    @include('partials.news.horizontal-block')
                @endforeach
            </ul>
        </div>

    </div>
    <div class="row">
        @foreach($recentPosts->take(4) as $recentPost)
            @include('partials.news.horizontal-block')
        @endforeach
    </div>

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