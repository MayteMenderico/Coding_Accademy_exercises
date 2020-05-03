let canvas = document.querySelectorAll("footer canvas");
let orderedCanvas = [];

let orderedColors = ['rgb(255, 165, 0)', 'rgb(128, 0, 128)', 'rgb(0, 0, 0)', 'rgb(128, 128, 0)'];

for(let x = 0; x < orderedColors.length; x++){
    for(let y = 0; y < canvas.length; y++){
        if(getComputedStyle(canvas[y]).backgroundColor === orderedColors[x]){
            console.log("[canvas]", canvas[y], getComputedStyle(canvas[y]).backgroundColor, orderedColors[x]);
            orderedCanvas.push(canvas[y]);
        }
    }
}

console.log(orderedCanvas);
let divCanvas = document.querySelector("footer div");
divCanvas.innerHTML = "";

for(let x = 0; x < orderedCanvas.length; x++) {
    divCanvas.appendChild(orderedCanvas[x]);
}