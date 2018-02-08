<div class="row">
    @foreach($recentPosts->take(4) as $recentPost)

    <div class="col l6 col m12 col s12 ">
        <div class="z-depth-1 ">
            <div class="news horizontal newsHover" onclick="location.href='{{env('APP_URL').'posts/'.$recentPost->id}}';">
                <div class="col l4 col m4 col s12 no-padding">
                    <!-- News Image -->
                    <div class="news-image" style="
                            margin-top: 10px;
                            width:100%;
                            height: 180px;
                            background: #fff url('{{env('APP_URL').'/storage/'.$recentPost->image}}');
                            background-size: cover;
                            background-position: center">
                    </div>
                </div>
                <div class="col l8 col m8 col s12 no-padding">
                    <!-- News Description -->
                    <div class="news-description">
                        <div class="news-time">
                            <i class="fa fa-clock-o"></i> {{$recentPost->created_at->diffForHumans()}}
                        </div>
                        <div class="news-title"> {{$recentPost->title}}</div>
                        <div class="news-content"><p>{{$recentPost->excerpt}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>