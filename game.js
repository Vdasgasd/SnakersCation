const playBoard = document.querySelector(".board");
const elementScore = document.querySelector(".score");

let foodX, foodY;
let snakeX = 18, snakeY = 18;
let veloX = 0, veloY = 0;
let snakeBody = [];
let status = false;
let setIntervalStat;
let score = 0 ;
var hScore = 0;



//controll movement
const changeDirection = (k) => {
    if (k.key === "ArrowUp" && veloY != 1) {
        veloX = 0;
        veloY = -1;
    } else if (k.key === "ArrowDown" && veloY != -1) {
        veloX = 0;
        veloY = 1;
    } else if (k.key === "ArrowLeft"&& veloX != 1) {
        veloX = -1;
        veloY = 0;
    } else if (k.key === "ArrowRight"&& veloX != -1) {
        veloX = 1;
        veloY = 0;
    }
    initGame();
}

const randomFoodPos = () => {
    foodX = Math.floor(Math.random() * 50) + 1;
    foodY = Math.floor(Math.random() * 50) + 1;
}
const handleStatus = () => {
    clearInterval(setIntervalStat);
    if (confirm("Press Button To replay")) {
        location.reload();
    }else{
        location.href = 'confirm.php';
    }
  
}

const initGame = () => {
if (status) return handleStatus();
    
    let objek = ` <div class="food"  style="grid-area: ${foodY} / ${foodX}"></div>`;

    if (snakeX === foodX && snakeY === foodY) {
        randomFoodPos();
        snakeBody.push([foodX, foodY]);
        score ++;
        hScore = score >= hScore ? score : hScore;
        elementScore.innerHTML=`Score: ${score}`;

        return hScore;


    }

    for (let i = snakeBody.length - 1; i > 0; i--) {
        snakeBody[i] = snakeBody[i - 1];

    }

    snakeBody[0] = [snakeX, snakeY];
    snakeX += veloX;
    snakeY += veloY;

    if (snakeX <= 0 || snakeX > 50 || snakeY <= 0 || snakeY > 50) {
        console.log("game over");
        status =true;
        console.log(hScore);
        var high= hScore;
        document.cookie = "score_tinggi="+hScore;
  
    }
    //movement head
    for (let i = 0; i < snakeBody.length; i++) {

        objek += ` <div class="head"  style="grid-area: ${snakeBody[i][1]} / ${snakeBody[i][0]}"></div>`;

        if( i !== 0 && snakeBody[0][1] === snakeBody[i][1] &&  snakeBody[0][0] === snakeBody[i][0]){
            status =true;
        }
    }


    playBoard.innerHTML = objek;


}

randomFoodPos();
setIntervalStat= setInterval(initGame, 250);
document.addEventListener("keydown", changeDirection);