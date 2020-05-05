let divPlay = document.querySelector('footer div');
let canvas = document.querySelector('footer div canvas');

let audio = document.createElement('audio');

divPlay.appendChild(audio);

let source1 = document.createElement('source')

audio.appendChild(source1);

let audioTag = document.querySelector('footer div audio');
let sourceTag = document.querySelector('footer div audio source');

sourceTag.setAttribute('src', "./triangle.ogg");
sourceTag.setAttribute('type', 'audio/ogg');

function draw() {

    if (canvas.getContext){
        let ctx = canvas.getContext('2d');

        ctx.beginPath();
        ctx.moveTo(6, 6);
        ctx.lineTo(14, 10);
        ctx.lineTo(6, 14);
        ctx.fillStyle = "white";
        ctx.fill();
        ctx.lineWidth = 1;
        ctx.strokeStyle = "yellow";
        ctx.stroke()
    }
}

draw();

let btnPause = document.querySelector('footer div:nth-child(2) button:nth-child(1)');
let btnStop = document.querySelector('footer div:nth-child(2) button:nth-child(2)');
let btnMute = document.querySelector('footer div:nth-child(2) button:nth-child(3)');

canvas.addEventListener('click', () => {
    audioTag.volume = 1.0;
    audioTag.play();
});

btnPause.addEventListener('click', () => {
    audioTag.pause();
})

btnStop.addEventListener('click', () => {
    audioTag.pause();
    audioTag.currentTime = 0;
})

btnMute.addEventListener('click', () => {
    audioTag.volume = 0.0;
})