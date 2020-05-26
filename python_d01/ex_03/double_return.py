def double_return(objects):
    keys = []
    values = []

    for key in objects:
        keys.append(key)
        values.append( objects[key] )        
    
    return [keys, values]