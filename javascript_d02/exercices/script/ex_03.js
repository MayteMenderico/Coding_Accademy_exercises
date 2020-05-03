let name = null;

for(;;){
    name = prompt("What is your name ?");

    if(name !== null && name !== "") break;
}

console.log(name);

let element = document.querySelector('footer div:nth-child(1)');

element.innerText = `Hello ${name}!`;