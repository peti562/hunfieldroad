setTimeout(function() {
    drawCanvas();
    },500);

function drawCanvas(){

    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var home_goals = data.home_goals;
    var away_goals = data.away_goals;
    var multiply = 1;
    var crest_width = 130;
    var crest_y = 540;

    var home_crest = {
        src: data.home_crest,
        x: 240,
        y: crest_y,
        width: crest_width
    };

    var away_crest = {
        src: data.away_crest,
        x: canvas.width-home_crest.x-crest_width,
        y: crest_y,
        width: crest_width
    };


    function extra(source) {
        var bkimg = new Image();
        bkimg.crossOrigin = 'anonymous';
        bkimg.onload = function() {
            context.drawImage(bkimg, 0, 420);
        };
        bkimg.src = source;
    }

    function draw(obj){
        context.beginPath();
        context.moveTo((obj.a.x*multiply), obj.a.y*multiply);
        context.lineTo((obj.b.x*multiply), obj.b.y*multiply);
        context.lineTo(obj.c.x*multiply, obj.c.y*multiply);
        context.lineTo(obj.d.x*multiply, obj.d.y*multiply);
        context.fillStyle = obj.color;
        context.fill();
    }

    function write(obj) {
        context.font = (obj.font_size+'pt '+obj.font);
        context.textAlign = 'center';
        context.fillStyle = obj.color;
        context.transform(obj.tdata.a, obj.tdata.b, obj.tdata.c, obj.tdata.d, obj.tdata.e, obj.tdata.f);
        context.fillText(obj.text, obj.pos.x, obj.pos.y);
        context.transform(obj.tdata.a, (obj.tdata.b*-1), (obj.tdata.c*-1), obj.tdata.d, obj.tdata.e, obj.tdata.f);
    };

    function addImage(obj) {
        var img = new Image();
        img.crossOrigin = 'anonymous';
        img.onload = function() {
            var aspect_ratio = img.width / img.height;
            var newHeight = obj.width/aspect_ratio;
            var newY = obj.y - (newHeight/2);
            context.drawImage(img, obj.x, newY, obj.width, newHeight);
        };
        img.src = obj.src;
    };

    function setBackground(source) {
        var bkimg = new Image();
        bkimg.crossOrigin = 'anonymous';
        bkimg.onload = function() {
            var aspect_ratio = bkimg.width / bkimg.height;
            var newHeight = canvas.width/aspect_ratio;
            context.globalCompositeOperation='destination-over';
            context.drawImage(bkimg, 0, 0, canvas.width, newHeight);
        };
        bkimg.src = source;
    }


    var block = {
        a: { x:0,    y:448 },
        b: { x:1000, y:336 },
        c: { x:1000, y:700 },
        d: { x:0,    y:700 },
        color: data.colors.block
    };

    var lineabove = {
        a: { x:0,    y:441 },
        b: { x:1000, y:329 },
        c: { x:1000, y:346 },
        d: { x:0,    y:458 },
        color: data.colors.lineabove
    };

    var miniribbon = {
        a: { x:0,   y:463 },
        b: { x:285, y:431 },
        c: { x:285, y:435 },
        d: { x:0,   y:467 },
        color: data.colors.ribbon
    };

    var bigribbon = {
        a: { x:500,   y:350 },
        b: { x:1000,  y:295 },
        c: { x:1000,  y:375 },
        d: { x:510,   y:430 },
        color: data.colors.ribbon
    };

    var ribbontext = {
        font: 'epl-font',
        font_size: '40',
        color: data.colors.ribbontext,
        transform: true,
        tdata: { a: 1, b: -0.11, c: 0.1, d: 1, e: 0, f: 0},
        text: 'VÉGEREDMÉNY',
        pos: {x: 660, y: 462}
        };

    var result = {
        font: 'epl-font',
        font_size: '100',
        color: data.colors.result,
        transform: false,
        tdata: { a: 1, b: 0, c: 0, d: 1, e: 0, f: 0},
        text: home_goals+'-'+away_goals,
        pos: {x: 500, y: 590}
    };

    var social = {
        font: 'epl-font',
        font_size: '30',
        color: data.colors.social,
        transform: false,
        tdata: { a: 1, b: 0, c: 0, d: 1, e: 0, f: 0},
        text: 'HUNFIELD ROAD',
        pos: {x: 153, y: 685}
    };
    new Promise(function(fulfill, reject){
        draw(block);
        extra(data.ucl_image);
        draw(lineabove);
        draw(miniribbon);
        draw(bigribbon);
        write(ribbontext);
        fulfill(result);
    }).then(function(result){
        return new Promise(function(fulfill, reject){
            write(result);
            write(social);
            addImage(home_crest);
            addImage(away_crest);
            fulfill(result);
        });
    }).then(function(result){
        return new Promise(function(fulfill, reject){
            setBackground(data.background_image);
            fulfill(result);
        });
    }).then(function(result){
        console.log(lineabove);
    });
};

function savingTheCanvas(){
    // Generate the image data
    var pic = document.getElementById("canvas").toDataURL("image/png");
    pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
    console.log(pic);
    // Sending the image data to Server
   /* $.ajax({
        type: 'POST',
        url: 'hunfieldroad/UploadPic',
        data: '{ "imageData" : "' + pic + '" }',
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        success: function (msg) {
            alert("Done, Picture Uploaded.");
        }
    });*/
}