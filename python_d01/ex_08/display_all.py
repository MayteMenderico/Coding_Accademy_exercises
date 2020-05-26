def display_all(objects):
    for key in objects:
        value = objects[key]
        print("{0}->({1}: {2})".format(key, type(value).__name__, str(value)))