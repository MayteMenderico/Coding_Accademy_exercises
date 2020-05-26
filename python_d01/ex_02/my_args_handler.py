#!/usr/bin/python

def my_args_handler(*args):
    phrase = ""
    for arg in args:
        value = str(arg)

        if(arg == args[-1]):
            phrase += value
        else:
            phrase += "{0}, ".format(value)
    
    print(phrase)