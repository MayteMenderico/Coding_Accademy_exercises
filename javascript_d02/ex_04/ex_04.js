let body = document.querySelector('body');
let div = document.querySelector('footer div:nth-child(1)');

body.addEventListener('keydown', (event) => {
    let character = String.fromCharCode(event.which);

    console.log("[TECLA APERTADA]", event.keyCode, character);

    if(div.innerText.length < 42){
        div.innerText += character;
    }
})