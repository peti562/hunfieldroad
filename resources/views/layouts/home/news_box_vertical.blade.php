
    @for($i=$offset; $i<($offset+$limit); $i++)
        <div class="col l3 col m6 col s12">
            <!-- Vertical News Box -->
            <div class="news vertical z-depth-1 newsHover" onclick="location.href='{{env('APP_URL').'posts/'.$recentPosts[$i]->id}}';">
                <!-- News Image -->
                <div class="news-image" style="
                        margin-top: 10px;
                        width:100%;
                        height: 180px;
                        background: #fff url('{{env('APP_URL').'/storage/'.$recentPosts[$i]->image}}');
                        background-size: cover;
                        background-position: center">
                </div>
                <!-- News Description -->
                <div class="news-description">
                    <div class="news-time">
                        <i class="fa fa-clock-o"></i>{{$recentPosts[$i]->created_at->diffForHumans()}}
                    </div>
                    <div class="news-title">{{$recentPosts[$i]->title}}</div>
                    <div class="news-content"><p>{{$recentPosts[$i]->excerpt}}</p></div>
                </div>
            </div>
        </div>
    @endfor
