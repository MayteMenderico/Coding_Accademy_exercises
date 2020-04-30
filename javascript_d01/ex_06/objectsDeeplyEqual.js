function objectsDeepyEqual(obj1, obj2){
    if(JSON.stringify(obj1) !== JSON.stringify(obj2)) return false;

    return true;
}

let obj1 = {
    a: 5,
    teste: {
        value: 10
    }
}

let obj2 = {
    a: 5,
    teste: {
        value: 11
    }
}

let obj3 = {
    user: {
        id: 'armazenamento do id'
    }
}

console.log(objectsDeepyEqual(obj1, obj1));