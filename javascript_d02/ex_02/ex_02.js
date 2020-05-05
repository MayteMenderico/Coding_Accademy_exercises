let element = document.getElementsByTagName('DIV')[2];

console.log(element);

element.innerText = 0;

element.addEventListener('click', () => {
    let numClicks = parseInt(element.innerText);

    numClicks++;

    element.innerText = numClicks;
})