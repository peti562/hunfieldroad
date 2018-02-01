@extends('layouts.master')

@section('main-content')
    <div class="row">
        <div class="col l8 col m12">
            <!-- News Single Style 3 -->
            <div class="news-single style-3 z-depth-1">
                <!-- News Image -->
                @if(isset($post->image))
                <img class="responsive-img" src="{{env('APP_URL').'/storage/'.$post->image}}" alt="news Image">
                @endif
                <div class="content">
                    <!-- News Title -->
                    <div class="news-title" style="font-size: 35px; padding-left: 5%;">
                        {{$post->title}}
                    </div>
                    <!-- News Description -->
                    <div class="description post-body" style="text-align: justify; padding: 0 5%;">
                        {!! $post->body !!}
                    </div>
                    <!-- News Detail -->
                    <div class="news-detail">
                        <span class="news-by"><a href="javascript:void(0);">Kris Basova</a></span>
                        <span class="news-month"><a href="javascript:void(0);"><i class="fa fa-clock-o"></i> March 19</a></span>
                        <span class="news-comment"><a href="javascript:void(0);"><i class="mdi-communication-messenger"></i> 35</a></span>
                        <span class="news-view"><a href="javascript:void(0);"><i class="fa fa-eye"></i> 4335</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l4 col m12">
            <!-- New single Style 3 Testimonial -->
            <div class="testimonial z-depth-1" style="height: 300px; overflow: hidden">
                <div class="fb-page" data-href="https://www.facebook.com/HunfieldRoad/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/HunfieldRoad/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/HunfieldRoad/">Hunfield Road</a></blockquote></div>
            </div>

            <!-- New single Style 3 Advertise Box -->
            <div class="advertis z-depth-1">
                <!-- Advertise Image -->
                <div style="vertical-align: middle;font-weight: 600;">
                    <div id="mini_table_head" style="font-size: 15px;">
                        <div class="mini-table-row" style="background-color: #9D141D; color:white; font-weight: 600; text-align: center; width:100%;">
                            <div class="position" style="padding-top: 10px;">Poz.</div>
                            <div class="crest" style="height:40px; padding-top: 10px;"></div>
                            <div class="tableTeam" style="padding-top: 10px;">Csapat</div>
                            <div class="points" style="padding-top: 10px;">P</div>
                            <div class="goaldifference" style="padding-top: 10px;">GD</div>
                            <div class="played" style="padding-top: 10px;">M</div>
                        </div>
                    </div>
                    <div id="mini_table" style="margin:10px 0; font-size: 15px;"></div>
                </div>
                @include('partials.recent-posts')
            </div>
        </div>
    </div>




@endsection