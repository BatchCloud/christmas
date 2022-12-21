<?php

$request = $_SERVER['REQUEST_URI'];

$users = [
    "/1" => [
        "name" => "Basti",
        "text" => "Lieber Basti,<br><br>ich wünsche Dir eine wunderschöne Weihnachtszeit und ein glückliches neues Jahr. Ich hoffe, Du kannst die Feiertage in geselliger Runde und vielleicht sogar mit ein paar leckeren Plätzchen genießen.<br><br>Weihnachten ist für viele Menschen eine besondere Zeit, in der wir uns bewusst machen, was uns im Leben wichtig ist und wofür wir dankbar sind. Ich bin dankbar, dass ich Dich als Freund habe und ich hoffe, dass wir auch in Zukunft viele schöne Momente miteinander teilen werden.<br><br>Ich wünsche Dir alles Liebe und Gute für die kommenden Festtage und das neue Jahr.<br><br>Liebe Grüße,<br><br>Dein Basti",
    ],
    "/2" => [
        "name" => "Lea",
        "text" => "Liebe Lea,<br><br>ich wünsche Dir eine wunderschöne Weihnachtszeit und ein glückliches neues Jahr. Ich hoffe, Du kannst die Feiertage in geselliger Runde und vielleicht sogar mit ein paar leckeren Plätzchen genießen.<br><br>Weihnachten ist für viele Menschen eine besondere Zeit, in der wir uns bewusst machen, was uns im Leben wichtig ist und wofür wir dankbar sind. Ich bin dankbar, dass ich Dich als Freund habe und ich hoffe, dass wir auch in Zukunft viele schöne Momente miteinander teilen werden.<br><br>Ich wünsche Dir alles Liebe und Gute für die kommenden Festtage und das neue Jahr.<br><br>Liebe Grüße,<br><br>Dein Basti",
    ],
];

if (array_key_exists($request ,$users))
{
    $user = $users[$request];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.9.0/p5.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

  <title>Weihnachtsgrüße</title>
  <!-- Tailwind CSS einbinden -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <style>
    body { background-color:#333; }
    #snow{
        background:none;
        font-family:Androgyne;
        background-image:url('https://i.imgur.com/ChQcWgQ.png'), url('https://i.imgur.com/5gvatHT.png'), url('https://i.imgur.com/pUPB6gi.png');
        height:100%;
        left:0;
        position:absolute;
        pointer-events:none;
        top:0;width:100%;
        z-index:1;
        -webkit-animation:snow 10s linear infinite;
        -moz-animation:snow 10s linear infinite;
        -ms-animation:snow 10s linear infinite;
        animation:snow 10s linear infinite
    }
    @keyframes snow{
        0%{background-position:0px 0px, 0px 0px, 0px 0px}
        50%{background-position:500px 500px, 100px 200px, -100px 150px}
        100%{background-position:500px 1000px, 200px 400px, -100px 300px}
    }
    @-moz-keyframes snow{
        0%{background-position:0px 0px, 0px 0px, 0px 0px}
        50%{background-position:500px 500px, 100px 200px, -100px 150px}
        100%{background-position:400px 1000px, 200px 400px, 100px 300px}
    }
    @-webkit-keyframes snow{
        0%{background-position:0px 0px, 0px 0px, 0px 0px}
        50%{background-position:500px 500px, 100px 200px, -100px 150px}
        100%{background-position:500px 1000px, 200px 400px, -100px 300px}
    }
    @-ms-keyframes snow{
        0%{background-position:0px 0px, 0px 0px, 0px 0px}
        50%{background-position:500px 500px, 100px 200px, -100px 150px}
        100%{background-position:500px 1000px, 200px 400px, -100px 300px}
    }

.letter {
  background: #fff;
  box-shadow: 0 0 10px rgba(0,0,0,0.3);
  margin: 26px auto 0;
  max-width: 550px;
  min-height: 300px;
  padding: 24px;
  position: relative;
  width: 80%;
}
.letter:before, .letter:after {
  content: "";
  height: 98%;
  position: absolute;
  width: 100%;
  z-index: -1;
}
.letter:before {
  background: #fafafa;
  box-shadow: 0 0 8px rgba(0,0,0,0.2);
  left: -5px;
  top: 4px;
  transform: rotate(-2.5deg);
}
.letter:after {
  background: #f6f6f6;
  box-shadow: 0 0 3px rgba(0,0,0,0.2);
  right: -3px;
  top: 1px;
  transform: rotate(1.4deg);
}

CSS JSResult Skip Results Iframe
EDIT ON
/* style.css */

html, body {
  height: 100%;
}

body {
  margin: 0;
  display: flex;

  /* This centers our sketch horizontally. */
  justify-content: center;

  /* This centers our sketch vertically. */
  align-items: center;
  
 
}
.polaroid a {
        background: #ffffff;
        display: inline-block;
        margin: 55px 75px 30px;
        padding: 15px 15px 30px;
        text-align: center;
        text-decoration: none;
        -webkit-box-shadow: 0 4px 6px rgba(0, 0, 0, .3);
        -moz-box-shadow: 0 4px 6px rgba(0, 0, 0, .3);
        box-shadow: 0 4px 6px rgba(0, 0, 0, .3);
        -webkit-transition: all .20s linear;
        -moz-transition: all .20s linear;
        transition: all .20s linear;
        z-index: 0;
        position: relative;
        transform: rotate(-9deg);
      }
      .polaroid a:after {
        color: #333;
        font-size: 25px;
        content: attr(title);
        position: relative;
        top: 15px;
      }
      .polaroid img {
        display: block;
        width: 250px;
      }
      .polaroid a:hover {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        transform: scale(1.2);
        z-index: 10;
        -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, .7);
        -moz-box-shadow: 0 10px 20px rgba(0, 0, 0, .7);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .7);
      }
 </style>

</head>
<body class="bg-black">
  <div class=" font-sans leading-normal tracking-wide py-8" id="snow">
    <div class="letter">
        <div id="typed-strings">
            <p><?php echo $user['text']; ?></p>
        </div>
        <span id="typed"></span>
        <div class="polaroid">
            <a href="#" title="Ich">
                <img height="250" src="https://i.ytimg.com/vi/AkxjTxFc3pw/hqdefault.jpg" alt="Ich" title="Ich" />
            </a>
         </div>
    </div>
  </div>
  <script>
  var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    typeSpeed: 50
  });
</script>
  <script>

const WANDERER_MOVE_MULTIPLIER = 8;
const WANDERER_ROTATE_SPEED = 0.03; // very sensitive

const PATH_WIDTH = 5;
const PATH_HIGHLIGHT_WIDTH = 4;

const LIGHT_GRAPHICS_WIDTH_HEIGHT = 60;

const MAX_BULBS = 300;
const BULB_COLORS = [
  '#00d9ff',
  '#ff0d0d',
  '#59ff9d',
  '#b959ff'
];
const BULB_LAST_INDEX = BULB_COLORS.length - 1;
const BULB_FREQUENCY = 200;

let node;
let pathGraphics;
let bulbGraphics = [];

let bulbs = [];
let bulbTick = 0;
let bulbFlip = false;
let bulbColorIndex = 0;
let bulbInterval = null;
let done = false;

function setup()  {
  createCanvas(window.windowWidth, window.windowHeight);
  background(20);
  
  node = new Wanderer();
  
  pathGraphics = createGraphics(width, height);
  pathGraphics.noFill();
  pathGraphics.strokeCap(PROJECT);
  
  BULB_COLORS.forEach((color) => {
    bulbGraphics.push(getBulbGraphics(color));
  });
  
  bulbInterval = setInterval(() => {
    if(bulbs.length < MAX_BULBS) {
       addBulb();
    } else {
      clearInterval(bulbInterval);
      done = true;
    }
  }, BULB_FREQUENCY)
}

function draw() {
  background(20);
  
  if(!done) {
    node.render();
  }
  
  image(pathGraphics, 0, 0);
  bulbs.forEach((bulb) => bulb.render());
}

function addBulb() {
  const pos = node.getPosition();
  const direction = node.getDirection();
  bulbs.push(new Bulb(pos.x, pos.y, direction - (bulbFlip ? PI : 0), bulbGraphics[bulbColorIndex]));
  bulbFlip = !bulbFlip;
  bulbColorIndex += 1;
  
  if(bulbColorIndex > BULB_LAST_INDEX) {
    bulbColorIndex = 0;
  }
}

function drawBulb(graphics, color) {
  graphics.fill(color);
  graphics.noStroke();
  
  graphics.beginShape();
  graphics.vertex(-4, 0);
  graphics.vertex(-6, -5);
  graphics.vertex(-7, -10);
  graphics.vertex(-8, -15);
  graphics.vertex(0 - 7, -20);
  graphics.vertex(-4, -25);
  graphics.vertex(0, -27);
  graphics.vertex(0, 0);
  graphics.endShape();
  graphics.beginShape();
  graphics.vertex(4, 0);
  graphics.vertex(6, -5);
  graphics.vertex(7, -10);
  graphics.vertex(8, -15);
  graphics.vertex(7, -20);
  graphics.vertex(4, -25);
  graphics.vertex(0, -27);
  graphics.vertex(0, 0);
  graphics.endShape();
  
  graphics.fill('#378a2e');
  graphics.rect(0, 0, 10, 5);
}

function getBulbGraphics(color) {
  const graphics = createGraphics(LIGHT_GRAPHICS_WIDTH_HEIGHT, LIGHT_GRAPHICS_WIDTH_HEIGHT);
  graphics.rectMode(CENTER);
  
  const startX = graphics.width * 0.5;
  const startY = graphics.height - 10;
  
  graphics.translate(startX, startY - 45);
  graphics.rotate(PI);
  graphics.scale(1.2);
  
  // draw the bulb once
  drawBulb(graphics, color);
  
  // blur the bulb
  graphics.filter(BLUR, 8);
  graphics.scale(0.8);
  
  // draw the bulb again to give a glow effect
  drawBulb(graphics, color);
  return graphics;
}

class Wanderer {
  constructor() {
    this.pos = { x: random(width), y: random(height) };
    this.lastPos = { ...this.pos }
    this.direction = random(TWO_PI);
    this.noiseValue = 0;
  }
  getPosition() {
    return { x: this.pos.x, y: this.pos.y };
  }
  getDirection() {
    return this.direction;
  }
  render() {
    this.lastPos = { ...this.pos }
    
    const xx = cos(this.direction) * WANDERER_MOVE_MULTIPLIER;
    const yy = sin(this.direction) * WANDERER_MOVE_MULTIPLIER;
    
    this.pos.x += xx;
    this.pos.y += yy;
    this.direction = noise(this.noiseValue += WANDERER_ROTATE_SPEED) * TWO_PI;
    
    let pathBroken = false;
    if(this.pos.y > height) {
      pathBroken = true;
      this.pos.y = 0;
    } else if(this.pos.y < 0) {
      pathBroken = true;
      this.pos.y = height;
    }
    
    if(this.pos.x > width) {
      pathBroken = true;
      this.pos.x = 0;
    } else if(this.pos.x < 0) {
      pathBroken = true;
      this.pos.x = width;
    }
    
    if(pathBroken) {
      this.lastPos = { ...this.pos }
    }
    
    pathGraphics.strokeWeight(PATH_WIDTH);
    pathGraphics.stroke('#378a2e');
    pathGraphics.line(this.pos.x, this.pos.y, this.lastPos.x, this.lastPos.y);
    pathGraphics.strokeWeight(PATH_HIGHLIGHT_WIDTH);
    pathGraphics.stroke('#42c134');
    pathGraphics.line(this.pos.x + 1, this.pos.y - 2, this.lastPos.x + 1, this.lastPos.y - 2);
  }
}

class Bulb {
  constructor(x, y, direction, bulbImage) {
    this.bulbImage = bulbImage;
    this.pos = { x, y };
    this.direction = direction;
    this.halfImageWidth = this.bulbImage.width * 0.5;
  }
  render() {
    push();
    translate(this.pos.x, this.pos.y);
    
    // const dir = atan2(this.pos.y - mouseY, this.pos.x - mouseX);
    rotate(this.direction);
    image(this.bulbImage, -this.halfImageWidth, 0);
    pop();
  }
}

  </script>
</body>
</html>

<?php
} else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background: #000;
  text-align: center;
}

#christmas {
  background: #162a4e;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzBjMWQzOCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzFhMzE1OCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #0c1d38), color-stop(100%, #1a3158));
  background-image: -moz-linear-gradient(#0c1d38, #1a3158);
  background-image: -webkit-linear-gradient(#0c1d38, #1a3158);
  background-image: linear-gradient(#0c1d38, #1a3158);
  position: relative;
  width: 182px;
  height: 182px;
  margin: 50px auto;
  overflow: hidden;
  /* iOS hack for border radius bleed with transforms */
  -webkit-mask-image: -webkit-radial-gradient(circle, white, black);
}
#christmas .ground {
  -moz-border-radius-topright: 130px 40px;
  -webkit-border-top-right-radius: 130px 40px;
  border-top-right-radius: 130px 40px;
  position: absolute;
  width: 133px;
  height: 61px;
  left: 0;
  bottom: 0;
  background: white;
}
#christmas .ground:before {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  content: " ";
  position: absolute;
  width: 130px;
  height: 100px;
  top: 10px;
  right: -60px;
  background: white;
}
#christmas .ground:after {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  content: " ";
  position: absolute;
  width: 70px;
  height: 70px;
  top: 5px;
  right: -75px;
  background: white;
}
#christmas .tree {
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-color: transparent transparent #23915b transparent;
}
#christmas .tree:before {
  content: " ";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-color: transparent transparent #23915b transparent;
}
#christmas .tree:after {
  content: " ";
  position: absolute;
  width: 0;
  height: 0;
  border-style: solid;
  border-color: transparent transparent #23915b transparent;
}
#christmas .tree.left {
  left: 28px;
  bottom: 78px;
  border-width: 0 18px 24px 18px;
}
#christmas .tree.left:before {
  top: 10px;
  left: -21px;
  border-width: 0 21px 28px 21px;
}
#christmas .tree.left:after {
  top: 22px;
  left: -24px;
  border-width: 0 24px 32px 24px;
}
#christmas .tree.left .snow {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -moz-box-shadow: -2px 2px 0 0 white, 2px 2px 0 0 white, -3px 3px 0 0 white, 3px 3px 0 0 white, -12px 14px 0 0 white, -13px 17px 0 1px white, -16px 19px 0 0 white, -9px 16px 0 0 white, -5px 15px 0 2px white, -9px 13px 0 0 white, 6px 15px 0 2px white, 0 13px 0 1px white, 11px 14px 0 1px white, 13px 17px 0 1px white, 15px 19px 0 0 white;
  -webkit-box-shadow: -2px 2px 0 0 white, 2px 2px 0 0 white, -3px 3px 0 0 white, 3px 3px 0 0 white, -12px 14px 0 0 white, -13px 17px 0 1px white, -16px 19px 0 0 white, -9px 16px 0 0 white, -5px 15px 0 2px white, -9px 13px 0 0 white, 6px 15px 0 2px white, 0 13px 0 1px white, 11px 14px 0 1px white, 13px 17px 0 1px white, 15px 19px 0 0 white;
  box-shadow: -2px 2px 0 0 white, 2px 2px 0 0 white, -3px 3px 0 0 white, 3px 3px 0 0 white, -12px 14px 0 0 white, -13px 17px 0 1px white, -16px 19px 0 0 white, -9px 16px 0 0 white, -5px 15px 0 2px white, -9px 13px 0 0 white, 6px 15px 0 2px white, 0 13px 0 1px white, 11px 14px 0 1px white, 13px 17px 0 1px white, 15px 19px 0 0 white;
  position: absolute;
  top: 1px;
  left: -3px;
  width: 6px;
  height: 6px;
  background: white;
  z-index: 1;
}
#christmas .tree.left .snow:after {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -moz-box-shadow: -14px 14px 0 0 white, -15px 17px 0 1px white, -18px 19px 0 0 white, -9px 16px 0 0 white, -5px 15px 0 2px white, -9px 13px 0 0 white, 6px 15px 0 2px white, 0 13px 0 1px white, 12px 17px 0 3px white, 16px 17px 0 1px white, 18px 19px 0 0 white, 11px 20px 0 1px white, 16px 20px 0 1px white, 18px 22px 0 1px white, 21px 25px 0 0 white, -2px 27px 0 1px white;
  -webkit-box-shadow: -14px 14px 0 0 white, -15px 17px 0 1px white, -18px 19px 0 0 white, -9px 16px 0 0 white, -5px 15px 0 2px white, -9px 13px 0 0 white, 6px 15px 0 2px white, 0 13px 0 1px white, 12px 17px 0 3px white, 16px 17px 0 1px white, 18px 19px 0 0 white, 11px 20px 0 1px white, 16px 20px 0 1px white, 18px 22px 0 1px white, 21px 25px 0 0 white, -2px 27px 0 1px white;
  box-shadow: -14px 14px 0 0 white, -15px 17px 0 1px white, -18px 19px 0 0 white, -9px 16px 0 0 white, -5px 15px 0 2px white, -9px 13px 0 0 white, 6px 15px 0 2px white, 0 13px 0 1px white, 12px 17px 0 3px white, 16px 17px 0 1px white, 18px 19px 0 0 white, 11px 20px 0 1px white, 16px 20px 0 1px white, 18px 22px 0 1px white, 21px 25px 0 0 white, -2px 27px 0 1px white;
  content: " ";
  position: absolute;
  top: 14px;
  left: 0px;
  width: 6px;
  height: 6px;
  background: white;
  z-index: 1;
}
#christmas .tree.right {
  left: 60px;
  bottom: 45px;
  border-width: 0 18px 24px 18px;
}
#christmas .tree.right:before, #christmas .tree.right:after {
  display: none;
}
#christmas .tree.right .snow {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -moz-box-shadow: -1px 2px 0 0 white, -2px 3px 0 0 white, 2px 2px 0 0 white, 3px 3px 0 0 white, 4px 4px 0 0 white, 6px 6px 0 0 white, 6px 15px 0 0 white, 8px 16px 0 0 white, 10px 16px 0 0 white, 11px 16px 0 0 white, -5px 13px 0 0 white, -7px 12px 0 0 white;
  -webkit-box-shadow: -1px 2px 0 0 white, -2px 3px 0 0 white, 2px 2px 0 0 white, 3px 3px 0 0 white, 4px 4px 0 0 white, 6px 6px 0 0 white, 6px 15px 0 0 white, 8px 16px 0 0 white, 10px 16px 0 0 white, 11px 16px 0 0 white, -5px 13px 0 0 white, -7px 12px 0 0 white;
  box-shadow: -1px 2px 0 0 white, -2px 3px 0 0 white, 2px 2px 0 0 white, 3px 3px 0 0 white, 4px 4px 0 0 white, 6px 6px 0 0 white, 6px 15px 0 0 white, 8px 16px 0 0 white, 10px 16px 0 0 white, 11px 16px 0 0 white, -5px 13px 0 0 white, -7px 12px 0 0 white;
  position: absolute;
  top: 0;
  left: -3px;
  width: 6px;
  height: 6px;
  background: white;
}
#christmas .flake {
  -webkit-animation: snow infinite linear 30s;
  -moz-animation: snow infinite linear 30s;
  -ms-animation: snow infinite linear 30s;
  -o-animation: snow infinite linear 30s;
  animation: snow infinite linear 30s;
  position: absolute;
  width: 1px;
  height: 1px;
  background: white;
}
#christmas .flake.large {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  width: 4px;
  height: 4px;
}
#christmas .flake.f-1 {
  -webkit-animation-duration: 20s;
  -moz-animation-duration: 20s;
  -ms-animation-duration: 20s;
  -o-animation-duration: 20s;
  animation-duration: 20s;
  left: 15px;
  margin-top: 86px;
}
#christmas .flake.f-2 {
  -webkit-animation-duration: 23s;
  -moz-animation-duration: 23s;
  -ms-animation-duration: 23s;
  -o-animation-duration: 23s;
  animation-duration: 23s;
  left: 32px;
  margin-top: 52px;
}
#christmas .flake.f-3 {
  -webkit-animation-duration: 32s;
  -moz-animation-duration: 32s;
  -ms-animation-duration: 32s;
  -o-animation-duration: 32s;
  animation-duration: 32s;
  left: 64px;
  margin-top: 15px;
}
#christmas .flake.f-4 {
  -webkit-animation-duration: 21s;
  -moz-animation-duration: 21s;
  -ms-animation-duration: 21s;
  -o-animation-duration: 21s;
  animation-duration: 21s;
  left: 69px;
  margin-top: 34px;
}
#christmas .flake.f-5 {
  -webkit-animation-duration: 24s;
  -moz-animation-duration: 24s;
  -ms-animation-duration: 24s;
  -o-animation-duration: 24s;
  animation-duration: 24s;
  left: 70px;
  margin-top: 72px;
}
#christmas .flake.f-6 {
  -webkit-animation-duration: 16s;
  -moz-animation-duration: 16s;
  -ms-animation-duration: 16s;
  -o-animation-duration: 16s;
  animation-duration: 16s;
  left: 90px;
  margin-top: 97px;
}
#christmas .flake.f-7 {
  -webkit-animation-duration: 34s;
  -moz-animation-duration: 34s;
  -ms-animation-duration: 34s;
  -o-animation-duration: 34s;
  animation-duration: 34s;
  left: 102px;
  margin-top: 81px;
}
#christmas .flake.f-8 {
  -webkit-animation-duration: 37s;
  -moz-animation-duration: 37s;
  -ms-animation-duration: 37s;
  -o-animation-duration: 37s;
  animation-duration: 37s;
  left: 102px;
  margin-top: 40px;
}
#christmas .flake.f-9 {
  -webkit-animation-duration: 35s;
  -moz-animation-duration: 35s;
  -ms-animation-duration: 35s;
  -o-animation-duration: 35s;
  animation-duration: 35s;
  left: 108px;
  margin-top: 67px;
}
#christmas .flake.f-10 {
  -webkit-animation-duration: 23s;
  -moz-animation-duration: 23s;
  -ms-animation-duration: 23s;
  -o-animation-duration: 23s;
  animation-duration: 23s;
  left: 90px;
  margin-top: 11px;
}
#christmas .flake.f-11 {
  -webkit-animation-duration: 27s;
  -moz-animation-duration: 27s;
  -ms-animation-duration: 27s;
  -o-animation-duration: 27s;
  animation-duration: 27s;
  left: 126px;
  margin-top: 55px;
}
#christmas .flake.f-12 {
  -webkit-animation-duration: 29s;
  -moz-animation-duration: 29s;
  -ms-animation-duration: 29s;
  -o-animation-duration: 29s;
  animation-duration: 29s;
  left: 131px;
  margin-top: 27px;
}
#christmas .flake.f-13 {
  -webkit-animation-duration: 24s;
  -moz-animation-duration: 24s;
  -ms-animation-duration: 24s;
  -o-animation-duration: 24s;
  animation-duration: 24s;
  left: 128px;
  margin-top: 112px;
}
#christmas .flake.f-14 {
  -webkit-animation-duration: 23s;
  -moz-animation-duration: 23s;
  -ms-animation-duration: 23s;
  -o-animation-duration: 23s;
  animation-duration: 23s;
  left: 146px;
  margin-top: 72px;
}
#christmas .flake.f-15 {
  -webkit-animation-duration: 19s;
  -moz-animation-duration: 19s;
  -ms-animation-duration: 19s;
  -o-animation-duration: 19s;
  animation-duration: 19s;
  left: 147px;
  margin-top: 102px;
}
#christmas .flake.f-16 {
  -webkit-animation-duration: 22s;
  -moz-animation-duration: 22s;
  -ms-animation-duration: 22s;
  -o-animation-duration: 22s;
  animation-duration: 22s;
  left: 166px;
  margin-top: 100px;
}
#christmas .flake.f-17 {
  -webkit-animation-duration: 18s;
  -moz-animation-duration: 18s;
  -ms-animation-duration: 18s;
  -o-animation-duration: 18s;
  animation-duration: 18s;
  left: 177px;
  margin-top: 73px;
}
#christmas .flake.f-18 {
  -webkit-animation-duration: 26s;
  -moz-animation-duration: 26s;
  -ms-animation-duration: 26s;
  -o-animation-duration: 26s;
  animation-duration: 26s;
  left: 22px;
  margin-top: 79px;
}
#christmas .flake.f-19 {
  -webkit-animation-duration: 20s;
  -moz-animation-duration: 20s;
  -ms-animation-duration: 20s;
  -o-animation-duration: 20s;
  animation-duration: 20s;
  left: 31px;
  margin-top: 41px;
}
#christmas .flake.f-20 {
  -webkit-animation-duration: 19s;
  -moz-animation-duration: 19s;
  -ms-animation-duration: 19s;
  -o-animation-duration: 19s;
  animation-duration: 19s;
  left: 38px;
  margin-top: 56px;
}
#christmas .flake.f-21 {
  -webkit-animation-duration: 31s;
  -moz-animation-duration: 31s;
  -ms-animation-duration: 31s;
  -o-animation-duration: 31s;
  animation-duration: 31s;
  left: 56px;
  margin-top: 43px;
}
#christmas .flake.f-22 {
  -webkit-animation-duration: 20s;
  -moz-animation-duration: 20s;
  -ms-animation-duration: 20s;
  -o-animation-duration: 20s;
  animation-duration: 20s;
  left: 89px;
  margin-top: 57px;
}
#christmas .flake.f-23 {
  -webkit-animation-duration: 18s;
  -moz-animation-duration: 18s;
  -ms-animation-duration: 18s;
  -o-animation-duration: 18s;
  animation-duration: 18s;
  left: 90px;
  margin-top: 30px;
}
#christmas .flake.f-24 {
  -webkit-animation-duration: 28s;
  -moz-animation-duration: 28s;
  -ms-animation-duration: 28s;
  -o-animation-duration: 28s;
  animation-duration: 28s;
  left: 100px;
  margin-top: 119px;
}
#christmas .flake.f-25 {
  -webkit-animation-duration: 29s;
  -moz-animation-duration: 29s;
  -ms-animation-duration: 29s;
  -o-animation-duration: 29s;
  animation-duration: 29s;
  left: 114px;
  margin-top: 14px;
}
#christmas .flake.f-26 {
  -webkit-animation-duration: 25s;
  -moz-animation-duration: 25s;
  -ms-animation-duration: 25s;
  -o-animation-duration: 25s;
  animation-duration: 25s;
  left: 127px;
  margin-top: 84px;
}
#christmas .flake.f-27 {
  -webkit-animation-duration: 26s;
  -moz-animation-duration: 26s;
  -ms-animation-duration: 26s;
  -o-animation-duration: 26s;
  animation-duration: 26s;
  left: 134px;
  margin-top: 114px;
}
#christmas .flake.f-28 {
  -webkit-animation-duration: 34s;
  -moz-animation-duration: 34s;
  -ms-animation-duration: 34s;
  -o-animation-duration: 34s;
  animation-duration: 34s;
  left: 145px;
  margin-top: 49px;
}
#christmas .flake.f-29 {
  -webkit-animation-duration: 29s;
  -moz-animation-duration: 29s;
  -ms-animation-duration: 29s;
  -o-animation-duration: 29s;
  animation-duration: 29s;
  left: 148px;
  margin-top: 42px;
}
#christmas .flake.f-30 {
  -webkit-animation-duration: 23s;
  -moz-animation-duration: 23s;
  -ms-animation-duration: 23s;
  -o-animation-duration: 23s;
  animation-duration: 23s;
  left: 157px;
  margin-top: 70px;
}
#christmas .flake.f-31 {
  -webkit-animation-duration: 18s;
  -moz-animation-duration: 18s;
  -ms-animation-duration: 18s;
  -o-animation-duration: 18s;
  animation-duration: 18s;
  left: 165px;
  margin-top: 78px;
}

@-webkit-keyframes snow {
  0% {
    -moz-transform: translateY(-110px);
    -ms-transform: translateY(-110px);
    -webkit-transform: translateY(-110px);
    transform: translateY(-110px);
  }
  100% {
    -moz-transform: translateY(160px);
    -ms-transform: translateY(160px);
    -webkit-transform: translateY(160px);
    transform: translateY(160px);
  }
}
@-moz-keyframes snow {
  0% {
    -moz-transform: translateY(-110px);
    -ms-transform: translateY(-110px);
    -webkit-transform: translateY(-110px);
    transform: translateY(-110px);
  }
  100% {
    -moz-transform: translateY(160px);
    -ms-transform: translateY(160px);
    -webkit-transform: translateY(160px);
    transform: translateY(160px);
  }
}
@-ms-keyframes snow {
  0% {
    -moz-transform: translateY(-110px);
    -ms-transform: translateY(-110px);
    -webkit-transform: translateY(-110px);
    transform: translateY(-110px);
  }
  100% {
    -moz-transform: translateY(160px);
    -ms-transform: translateY(160px);
    -webkit-transform: translateY(160px);
    transform: translateY(160px);
  }
}
@keyframes snow {
  0% {
    -moz-transform: translateY(-110px);
    -ms-transform: translateY(-110px);
    -webkit-transform: translateY(-110px);
    transform: translateY(-110px);
  }
  100% {
    -moz-transform: translateY(160px);
    -ms-transform: translateY(160px);
    -webkit-transform: translateY(160px);
    transform: translateY(160px);
  }
}
    </style>
</head>
<body>
<div id="christmas">
  <div class="flake large f-1"></div>
  <div class="flake large f-2"></div>
  <div class="flake large f-3"></div>
  <div class="flake large f-4"></div>
  <div class="flake large f-5"></div>
  <div class="flake large f-6"></div>
  <div class="flake large f-7"></div>
  <div class="flake large f-8"></div>
  <div class="flake large f-9"></div>
  <div class="flake large f-10"></div>
  <div class="flake large f-11"></div>
  <div class="flake large f-12"></div>
  <div class="flake large f-13"></div>
  <div class="flake large f-14"></div>
  <div class="flake large f-15"></div>
  <div class="flake large f-16"></div>
  <div class="flake large f-17"></div>
  <div class="flake f-18"></div>
  <div class="flake f-19"></div>
  <div class="flake f-20"></div>
  <div class="flake f-21"></div>
  <div class="flake f-22"></div>
  <div class="flake f-23"></div>
  <div class="flake f-24"></div>
  <div class="flake f-25"></div>
  <div class="flake f-26"></div>
  <div class="flake f-27"></div>
  <div class="flake f-28"></div>
  <div class="flake f-29"></div>
  <div class="flake f-30"></div>
  <div class="flake f-31"></div>
  <div class="tree left">
    <div class="snow"></div>
  </div>
  <div class="tree right">
    <div class="snow"></div>
  </div>
  <div class="ground"></div>
</div>
<h2 style="color: #fff">
    Hier gibt es kein Geschenk für dich<h2>
</body>
</html>


<?php

include 'default.php';

}
?>
