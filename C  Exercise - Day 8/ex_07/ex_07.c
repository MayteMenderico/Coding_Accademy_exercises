#include <stdio.h>

int fib_it(int nbr) {
    int i = 0;
    int j = 1;
    int tmp;

    for(int k = 1; k < nbr; k++) {
        tmp = i + j;
        i = j;
        j = tmp;
    }

    return j;
}

int main() {
    printf("%d\n", fib_it(10));
} 


/*Write an iterative function returning the nth rank of the fibonacci sequence.
The function will return the result or -1 in any error case.
https://en.wikipedia.org/wiki/Fibonacci_number
*/
