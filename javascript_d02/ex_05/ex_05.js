let fontSize = 16;
let bgSelected = '#bdc3c7';

let body = document.querySelector('body');

let buttonAdd = document.querySelector('footer div button:nth-child(1)');
let buttonMinus = document.querySelector('footer div button:nth-child(2)');
let selectorBg = document.querySelector('footer div select');

buttonAdd.addEventListener('click', () => {
    let bodyFontSyze = body.style.fontSize;

    fontSize += 1;

    console.log(fontSize, bodyFontSyze);
    body.style.fontSize = `${fontSize}px`;
});

buttonMinus.addEventListener('click', () => {
    let bodyFontSyze = body.style.fontSize;

    fontSize -= 1;

    console.log(fontSize, bodyFontSyze);
    body.style.fontSize = `${fontSize}px`;
});

selectorBg.addEventListener('change', (event) => {
    console.log("[CHANGE]", event.target.options, event.innerText);
    for(let x = 0; x < event.target.options.length; x++) {
        let option = event.target.options[x];

        if(option.selected){
            bgSelected = option.value;
            break;
        }
    }

    body.style.backgroundColor = bgSelected;
})