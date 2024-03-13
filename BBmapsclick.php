<!DOCTYPE html>
<html>
<head>
    <title>Boat maps</title>
    
</head>
<body>
<h1 style="text-align:left">
    <span style="font-weight:normal">Battersea Barge maps:</span>
    
</h1>
<p> Upper deck </p>
<p>
<canvas id="myCanvasUpper" width="710" height="350" style="border:1px solid grey"></canvas>
</p>

<p> Mid deck </p>
<p>
<canvas id="myCanvasMid" width="710" height="350" style="border:1px solid grey"></canvas>
</p>

<p> Lower deck </p>
<p>
<canvas id="myCanvasLower" width="710" height="350" style="border:1px solid grey"></canvas>
</p>

<script>
const canvasUpper = document.getElementById("myCanvasUpper");
const ctxUpper = canvasUpper.getContext("2d");
canvasUpper.width = 710;
canvasUpper.height = 350;
//Draw the map
const imgUpper = new Image();
imgUpper.src = "/Picture maps boats/UpperDeckBB.jpg";
imgUpper.addEventListener("load", function(){
    ctxUpper.drawImage(imgUpper,10,10, 691,313);
});

canvasUpper.addEventListener("click", function(event){
    let x = event.offsetX;
    let y = event.offsetY;
    ctxUpper.fillStyle = "red";
    ctxUpper.arc(x,y,5,0,Math.PI*2);
    ctxUpper.fill();
    ctxUpper.stroke();
});

const canvasMid = document.getElementById("myCanvasMid");
const ctxMid = canvasMid.getContext("2d");
canvasMid.width = 710;
canvasMid.height = 350;
//Draw the map
const imgMid = new Image();
imgMid.src = "/Picture maps boats/MidDeckBB.jpg";
imgMid.addEventListener("load", function(){
    ctxMid.drawImage(imgMid,10,10, 689,276);
});

canvasMid.addEventListener("click", function(event){
    let x = event.offsetX;
    let y = event.offsetY;
    ctxMid.fillStyle = "red";
    ctxMid.arc(x,y,5,0,Math.PI*2);
    ctxMid.fill();
    ctxMid.stroke();
});

const canvasLower = document.getElementById("myCanvasLower");
const ctxLower = canvasLower.getContext("2d");
canvasLower.width = 710;
canvasLower.height = 350;
//Draw the map
const imgLower = new Image();
imgLower.src = "/Picture maps boats/LowerDeckBB.jpg";
imgLower.addEventListener("load", function(){
    ctxLower.drawImage(imgLower,10,10, 696,242);
});

canvasLower.addEventListener("click", function(event){
    let x = event.offsetX;
    let y = event.offsetY;
    ctxLower.fillStyle = "red";
    ctxLower.arc(x,y,5,0,Math.PI*2);
    ctxLower.fill();
    ctxLower.stroke();
});
</script>

</html>
