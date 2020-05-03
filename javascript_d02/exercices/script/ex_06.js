const capitalize = (s) => {
    if (typeof s !== 'string') return ''
    return s.charAt(0).toUpperCase() + s.slice(1)
}

class Hero {
    constructor(name, group, inteligence, strength) {
        this.name = capitalize(name);
        this.group = group;
        this.inteligence = parseInt(inteligence);
        this.strength = parseInt(strength);
    }

    toString() {
        return `I am ${this.name} the ${this.group}, I have ${this.inteligence} inteligence points and ${this.strength} strength`;
    }
}


let mage = new Hero('amadeus', 'mage', 10, 3);
let warrior = new Hero('pontius', 'warrior', 1, 8);
let element = document.querySelector('footer div:nth-child(1)');



element.innerHTML += mage.toString();
element.innerHTML += "<br />";
element.innerHTML += warrior.toString();