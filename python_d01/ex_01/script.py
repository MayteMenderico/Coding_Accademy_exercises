#!/usr/bin/python

import sys

phrases = sys.argv
text = ""

for phrase in phrases[1:]:
    text += phrase


text = text.replace(" ","")
text = text.replace("\n","")
text = text.replace("@","")
text = text.replace("!","")
text = text.replace("_","")
text = text.replace(",","")
text = text.replace(";","")

vowels = 0
consoants = 0

for character in text:
    if character in 'aeiou':
        vowels = vowels + 1
    else:
        consoants = consoants + 1

print(len(text))

