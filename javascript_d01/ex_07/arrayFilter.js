function arrayFilter(arr, test) {
    let arrReturn = [];

    arr.forEach(element => {
        if( test( element ) ) {
            arrReturn.push(element)
        }
    });

    return arrReturn;
}