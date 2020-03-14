#include <stdio.h>

int fib_rec(int nbr) {
    int result;
    if(nbr < 2) {
        result = nbr;
    } else {
        result = fib_rec(nbr - 2) + fib_rec(nbr - 1);
    }
    return result;
}

int main() {
    printf("%d\n", fib_rec(10));
}


/*Write a recursive function returning the nth rank of the fibonacci sequence.
The function will return the result or -1 in any error case.
https://en.wikipedia.org/wiki/Fibonacci_number
*/
