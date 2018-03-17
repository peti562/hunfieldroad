<div class="col l12 col m12 col s12">

    <!-- News Slider -->
    <ul class="pgwSlider">
        @foreach($recentPosts->take(3) as $recentPost)
        <li>
            <!-- News Slider Image -->
            <div>
                {{--<img src="{{env('APP_URL').'/storage/'.$recentPost->image}}" alt="News Slider 1" style="height:100%">--}}
            </div>
                <!-- News Slider Content -->
            <div class="news-content">
                <div class="news-time"><small>{{$recentPost->created_at->diffForHumans()}}</small></div>
                <div class="news-title big"><h2> <a href="{{env('APP_URL').'posts/'.$recentPost->id}}">{{$recentPost->title}}</a> </h2></div>
                <p class="news-detail">{{$recentPost->excerpt}} </p>
            </div>
        </li>
        @endforeach
    </ul>
</div>