function countGs (phrase){
    let sumGs = 0;

    for(let x = 0; x < phrase.length; x++) {
        if(phrase[x] === "G"){
            sumGs++;
        }
    }

    return sumGs;
}