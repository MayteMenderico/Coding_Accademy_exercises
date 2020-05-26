def sum_sub(*args):
    if len(args) == 0:
        return 0
    else:
        newArgs = []

        for x in range(len(args)):
            if(args[x] == args[-1]):
                newArgs.append(args[x])
            else:
                if(args[x] % 2 == 0):
                    newArgs.append(args[x] - args[x+1])
                else:
                    newArgs.append(args[x] + args[x+1])
        
        return newArgs

print sum_sub(1, 2, 3, 4, 5, 6)