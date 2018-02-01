<div class="sidbar-box left-align">
    <div class="sidebar-title">Legutóbbi cikkek</div>
    <div class="news-sidebar">

        @foreach($recentPosts as $recentPost)
            <div class="news-box" >
                <div class="news-detail">
                    <div class="news-category">
                        <a href="{{env('APP_URL').'posts/'.$recentPost->id}}">{{$recentPost->created_at->diffForHumans()}} </a>
                    </div>
                    <div class="news-title">
                        <a href="{{env('APP_URL').'posts/'.$recentPost->id}}">{{$recentPost->title}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>