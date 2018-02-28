var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

var multiply = 1;
var home_goals = 2;
var away_goals = 5;

var settings = {
    bgcolor: '#8a1717',
    lineabove: '#ffffff',
    ribbon: '#ffe400',
    ribbon_text: '#000000',
    social: '#ffffff',
    result: '#ffffff'
};

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
};


var block = {
    a: { x:0,    y:448 },
    b: { x:1000, y:336 },
    c: { x:1000, y:700 },
    d: { x:0,    y:700 },
    color: '#8a1717'
};

var lineabove = {
    a: { x:0,    y:441 },
    b: { x:1000, y:329 },
    c: { x:1000, y:346 },
    d: { x:0,    y:458 },
    color: '#ffffff'
};

var miniribbon = {
    a: { x:0,   y:463 },
    b: { x:285, y:431 },
    c: { x:285, y:435 },
    d: { x:0,   y:467 },
    color: '#ffe400'
};

var bigribbon = {
    a: { x:500,   y:350 },
    b: { x:1000,  y:295 },
    c: { x:1000,  y:375 },
    d: { x:510,   y:430 },
    color: '#ffe400'
};

var ribbontext = {
    font: 'FFF English Premier League',
    font_size: '40',
    color: 'black',
    transform: true,
    tdata: { a: 1, b: -0.11, c: 0.1, d: 1, e: 0, f: 0},
    text: 'VÉGEREDMÉNY',
    pos: {x: 660, y: 462}
    };

var result = {
    font: 'FFF English Premier League',
    font_size: '100',
    color: 'white',
    tdata: { a: 1, b: 0.11, c: -0.1, d: 1, e: 0, f: 0},
    text: home_goals+'-'+away_goals,
    pos: {x: 500, y: 580}
};


draw(block);
draw(lineabove);
draw(miniribbon);
draw(bigribbon);
write(ribbontext);
write(result);





console.log(canvas);