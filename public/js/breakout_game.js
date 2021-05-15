// Creating Game area
let canvas = document.getElementById("myCanvas");
let context = canvas.getContext("2d");

// ---------
//  Var list
// ---------

// ball vars
let x = canvas.width/2;
let y = canvas.height-30 ;
let dx = 6;
let dy = 6;
let ballRadius = 10;
// paddle vars
let paddleHeight = 12;
let paddleWidth = 100;
let paddleX = (canvas.width-paddleWidth)/2;
// command vars
let rightPressed = false;
let leftPressed = false;
// brickField vars
let brickRowCount = 3;
let brickColumnCount = 8;
let brickWidth = 75;
let brickHeight = 20;
let brickPadding = 10;
let brickOffsetTop = 30;
let brickOffsetLeft = 30;
// brickField vars
let brickField = [] // create a table
for (let columns = 0 ; columns < brickColumnCount ; columns++) {
    brickField[columns] = [] // containing x columns
    for (let rows = 0 ; rows < brickRowCount ; rows++) {
        brickField[columns][rows] = {x: 0, y: 0, status: 1}; // containing x rows containing a brick object
    }
}
// score
let score = 0;
// lives
let lives = 3;
// color
color = '#0095DD';

// ---------
//  Commands
// ---------

document.addEventListener('keydown', keyDownHandler, false);
document.addEventListener('keyup', keyUpHandler, false);
document.addEventListener("mousemove", mouseMoveHandler, false);

function keyDownHandler(event) {
    if (event.key == "ArrowRight") {
        rightPressed = true;
    }
    else if (event.key == "ArrowLeft") {
        leftPressed = true;
    }
}
function keyUpHandler(event) {
    if (event.key == "ArrowRight") {
        rightPressed = false;
    }
    else if (event.key == "ArrowLeft") {
        leftPressed = false;
    }
}
function mouseMoveHandler(event) {
    let relativeX = event.clientX - canvas.offsetLeft;
    if (relativeX > 0 && relativeX < canvas.width) {
        paddleX = relativeX - paddleWidth/2;
    }
}

// -------------
//  Draw objects
// -------------

function drawBall() {
    context.beginPath();
    context.arc(x, y, ballRadius, 0, Math.PI*2);
    context.fillStyle=color;
    context.fill();
    context.closePath();
}

function drawPaddle() {
    context.beginPath();
    context.rect(paddleX, canvas.height-paddleHeight, paddleWidth, paddleHeight);
    context.fillStyle = color;
    context.fill();
    context.closePath();
}

function drawBricks() {
    for (let columns = 0 ; columns < brickColumnCount ; columns++) {
        for (let rows = 0 ; rows < brickRowCount ; rows++) {
            if (brickField[columns][rows].status == 1) {
                let brickX = (columns*(brickWidth+brickPadding))+brickOffsetLeft;
                let brickY = (rows*(brickHeight+brickPadding))+brickOffsetTop;
                brickField[columns][rows].x = brickX;
                brickField[columns][rows].y = brickY;
                context.beginPath();
                context.rect(brickX, brickY, brickWidth, brickHeight);
                context.fillStyle=color;
                context.fill();
                context.closePath();
            }
        }
    }
}

function drawScore() {
    context.font='16px Arial';
    context.fillStyle=color;
    context.fillText("Score : "+score, 8, 20);
}

function drawLives() {
    context.font='16px Arial';
    context.fillStyle=color;
    context.fillText("Lives : "+lives, canvas.width-67, 20);
}

function twoLivesLeft() {
    context.font='32px Arial';
    context.fillStyle='#F00';
    context.fillText("2 LIVES LEFT", canvas.width-canvas.width/2, canvas.height-canvas.height/2);
}

function oneLifeLeft() {
    context.font='32px Arial';
    context.fillStyle='#F00';
    context.fillText("1 LIFE LEFT", canvas.width-canvas.width/2, canvas.height-canvas.height/2);
}

// ---------------
//  Game functions
// ---------------

function collisionDetection() {
    for (let columns = 0; columns < brickColumnCount; columns++) {
        for (let rows = 0 ; rows < brickRowCount ; rows++) {
            let brick = brickField[columns][rows]; // put in brick each brick objetc
            if (brick.status == 1) {
                if (x > brick.x-ballRadius && x < brick.x+brickWidth+ballRadius && y > brick.y-ballRadius && y < brick.y+brickHeight+ballRadius) {
                    dy = -dy;
                    brick.status = 0;
                    score++;
                    if (score == brickColumnCount*brickRowCount) {
                        alert("YOU WIN, CONGRATULATIONS !");
                        document.location.reload();
                    }
                }
            }
        }
    }
}

// -------------
//  Run the game
// -------------


function draw() {
    context.clearRect(0, 0, canvas.width, canvas.height);
    drawBricks();
    drawBall();
    drawPaddle();
    drawScore();
    drawLives();
    collisionDetection();
    x += dx;
    y -= dy;
    if (x < ballRadius || x > canvas.width-ballRadius) {
        dx = -dx;
    }
    if (y < ballRadius) {
        dy = -dy;
    } 
    if (y > canvas.height-(ballRadius+paddleHeight)) {
        if (x > (paddleX-ballRadius*1.5) && x < (paddleX+paddleWidth+ballRadius*1.5)) {
            dy = -dy;
        }
        else {
            lives--;
            if (!lives) {
                alert("GAME OVER");
                document.location.reload();
            }
            if (lives == 2) {
                x = canvas.width/2; 
                y = canvas.height-30;
                dx = 6;
                dy = 9;
                paddleX = (canvas.width-paddleWidth)/2;
                color = '#0c0';
            }
            if (lives == 1) {
                x = canvas.width/2; 
                y = canvas.height-30;
                dx = 7;
                dy = 6;
                paddleX = (canvas.width-paddleWidth)/2;
                color = '#c00'
            }
        }
    }
    if (rightPressed) {
        paddleX += 15;
        if (paddleX + paddleWidth > canvas.width) {
            paddleX = canvas.width - paddleWidth;
        }
    }
    if (leftPressed) {
        paddleX -= 15;
        if (paddleX < 0) {
            paddleX = 0;
        }
    }
    // call itself over and over again syncing the framerate accordingly and rendering the shapes only when needed
    requestAnimationFrame(draw);
}

// setInterval runs a function each x milliseconds
// let interval = setInterval(draw, 6);
draw();