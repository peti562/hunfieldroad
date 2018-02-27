var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

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
    context.moveTo(0, 320);
    context.lineTo(700, 240);
    context.lineTo(700, 500);
    context.lineTo(0, 500);
    context.fillStyle = color;
    context.fill();
}

function drawLineAbove(color){
    context.beginPath();
    context.moveTo(0, 315);
    context.lineTo(700, 235);
    context.lineTo(700, 247);
    context.lineTo(0, 327);
    context.fillStyle = color;
    context.fill();
}



drawBlock(settings.bgcolor);
drawLineAbove(settings.lineabove);

console.log(canvas);