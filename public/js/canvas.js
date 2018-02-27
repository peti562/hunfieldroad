var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

var multiply = 1;

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
    context.fillStyle = block.color;
    context.fill();
}


var block = {
    a: {
        x:0,
        y:448
    },
    b: {
        x:1000,
        y:336
    },
    c: {
        x:1000,
        y:700
    },
    d: {
        x:0,
        y:700
    },
    color: '#8a1717'
    };

var lineabove = {
    a: {
        x:0,
        y:441
    },
    b: {
        x:1000,
        y:329
    },
    c: {
        x:1000,
        y:346
    },
    d: {
        x:0,
        y:458
    },
    color: '#ffffff'
};

var miniribbon = {
    a: {
        x:0,
        y:463
    },
    b: {
        x:285,
        y:431
    },
    c: {
        x:285,
        y:435
    },
    d: {
        x:0,
        y:467
    },
    color: '#ffe400'
};


function drawBigRibbon(color){
    context.beginPath();
    context.moveTo(500, 331);
    context.lineTo(1000, 308);
    context.lineTo(1000, 311);
    context.lineTo(0, 334);
    context.fillStyle = color;
    context.fill();
}



draw(block);
draw(lineabove);
draw(miniribbon);
drawLineAbove(settings.lineabove);
drawMiniRibbon(settings.ribbon);

console.log(canvas);