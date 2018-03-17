
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
        },
        template:{
            block : {
                a: { x:{{$data['template']['block']['a']['x']}},    y:{{$data['template']['block']['a']['y']}} },
                b: { x:{{$data['template']['block']['b']['x']}}, y:{{$data['template']['block']['b']['y']}} },
                c: { x:{{$data['template']['block']['c']['x']}}, y:{{$data['template']['block']['c']['y']}} },
                d: { x:{{$data['template']['block']['d']['x']}},    y:{{$data['template']['block']['d']['y']}} },
                color: data.colors.block
            },
            lineabove : {
                a: { x:0,    y:441 },
                b: { x:1000, y:329 },
                c: { x:1000, y:346 },
                d: { x:0,    y:458 },
                color: data.colors.lineabove
            },
            miniribbon : {
                a: { x:0,   y:463 },
                b: { x:285, y:431 },
                c: { x:285, y:435 },
                d: { x:0,   y:467 },
                color: data.colors.ribbon
            },
            bigribbon : {
                a: { x:500,   y:350 },
                b: { x:1000,  y:295 },
                c: { x:1000,  y:375 },
                d: { x:510,   y:430 },
                color: data.colors.ribbon
            }
        }

    };

</script>
<script src="{{asset('js/canvas.js')}}"></script>

</body>
</html>