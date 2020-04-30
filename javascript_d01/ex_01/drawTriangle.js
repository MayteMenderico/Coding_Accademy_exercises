function drawTriangle(height) {
    if(typeof(height) !== "number"){
        console.log("Height must be a number");
    } else {
        for(let y = 0; y < height; y++) {
            let tree = "";
    
            for(let x = 0; x <= y; x++){
                tree += "$";
            }
    
            console.log(tree);
        }
    }
}