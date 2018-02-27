var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

var m = 1;

var settings = {
    bgcolor: '#8a1717',
    lineabove: '#ffffff',
    ribbon: '#ffe400',
    ribbon_text: '#000000',
    social: '#ffffff',
    result: '#ffffff'
};


function drawBlock(color){
    context.beginPath();
    context.moveTo(0, 448);
    context.lineTo(1000, 336);
    context.lineTo(1000, 700);
    context.lineTo(0, 700);
    context.fillStyle = color;
    context.fill();
}

function drawLineAbove(color){
    context.beginPath();
    context.moveTo(0, 441);
    context.lineTo(1000, 329);
    context.lineTo(1000, 346);
    context.lineTo(0, 458);
    context.fillStyle = color;
    context.fill();
}

function drawMiniRibbon(color){
    context.beginPath();
    context.moveTo(0, 463);
    context.lineTo(285, 431);
    context.lineTo(285, 435);
    context.lineTo(0, 467);
    context.fillStyle = color;
    context.fill();
}

function drawBigRibbon(color){
    context.beginPath();
    context.moveTo(500, 331);
    context.lineTo(1000, 308);
    context.lineTo(1000, 311);
    context.lineTo(0, 334);
    context.fillStyle = color;
    context.fill();
}



drawBlock(settings.bgcolor);
drawLineAbove(settings.lineabove);
drawMiniRibbon(settings.ribbon);

console.log(canvas);