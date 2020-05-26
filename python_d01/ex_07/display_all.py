def display_all(objects):
    for key in objects:
        value = objects[key]
        print("({0}: {1})".format(type(value).__name__, str(value)))