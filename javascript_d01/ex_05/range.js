function range(start, end , step=1){
    let arr = [];

    if(step < 0) {
        for(let x = start; x >= end; x += step){
            arr.push(x);
        }
    } else {
        for(let x = start; x <= end; x += step){
            arr.push(x);
        }
    }
    
    return arr;
}