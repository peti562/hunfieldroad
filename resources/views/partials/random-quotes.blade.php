<div class="col l12 col m12 col s12">
    <!-- blockquote -->
    {{--<div class="blockquote z-depth-1" style="
    background: url('../images/back_ribbon.jpg') no-repeat fixed;
    background-size: cover;
    color: #fff;
    font-size: 20px;
    font-weight: 400;
    padding: 0;">
        <div class="blockquote-inside">
            Idézetek
        </div>
    </div>--}}
    <div class="blockquote z-depth-1">

        <div class="blockquote-inside">
            "{{$quote->body}}"
            <div class="quote-author">{{$quote->author}}</div>
        </div>
    </div>
</div>