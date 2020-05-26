def my_count_words(sentence):
    count = {}

    for word in sentence:
        if word not in count:
            count[word] = 1
        else:
            count[word] += 1

    return count