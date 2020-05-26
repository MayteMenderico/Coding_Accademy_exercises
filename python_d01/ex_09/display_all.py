def display_all(objects):
    index = 0
    for key in objects:
        value = objects[key]
        print("{0}->({1}: {2})".format(index, type(value).__name__, str(value)))
        index += 1