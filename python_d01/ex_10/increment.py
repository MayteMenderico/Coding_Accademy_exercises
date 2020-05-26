def increment(objects):
    newObject = []

    for item in objects:
        if(isinstance(item, int)):
            newObject.append(item+1)
        else:
            newObject.append(item)
    
    return newObject

print increment([3, 4, 9, 'a', "qvb", {}])