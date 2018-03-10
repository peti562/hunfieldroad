
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hunfield Road</title>
    <link href="{{asset('css/custom.css')}}" type="text/css" rel="stylesheet">
</head>
<body style="font-family: epl-font;">
<div class="col l12 col m12">
    <style>
        @import url({{url('font/Premier_League_Font_2018.ttf')}});

        @font-face {
            font-family: epl-font;
            src: url({{url('font/Premier_League_Font_2018.ttf')}});
        }
    </style>
    <span style="font: 40px epl-font;">.</span>
    <canvas
            height="700"
            width="1000"
            id="canvas"></canvas>
</div>

<script>
    var data = {
        background_image: '{{$data['background_image']}}',
        home_goals: '{{$data['home_team_goals']}}',
        away_goals: '{{$data['away_team_goals']}}',
        home_crest: '{{$data['home_team_crest']}}',
        away_crest: '{{$data['away_team_crest']}}',
        ucl_image: '{{$data['ucl_image']}}',
        colors: {
            block: '{{$data['colors']['block']}}',
            lineabove: '{{$data['colors']['lineabove']}}',
            ribbon: '{{$data['colors']['ribbon']}}',
            result: '{{$data['colors']['result']}}',
            ribbontext: '{{$data['colors']['ribbontext']}}',
            social: '{{$data['colors']['social']}}'
        }
    };

</script>
<script src="{{asset('js/canvas.js')}}"></script>

</body>
</html>