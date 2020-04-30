function fizzBuzz() {
    let message = "";
    for(let x = 1; x <= 20; x++){

        if(x % 3 === 0 && x % 5 === 0) {
            message += "FizzBuzz";
        } else if(x % 3 === 0){
            message += "Fizz";
        } else if(x % 5 === 0){
            message += "Buzz";
        } else {
            message += x;
        }

        if(x !== 20) message += ", ";
    }

    console.log(message);
}