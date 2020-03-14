#include<stdio.h>

int my_power_rec(int nbr, int pw) {
    if(pw <= 1) {
        return nbr;
    } else {
        return nbr * my_power_rec(nbr, pw - 1);
    }
}

void main() {
    printf("%d\n", my_power_rec(4, 12));
}

/*Same as the previous exercise, but this time, your function must use a recursive algorithm
*/
