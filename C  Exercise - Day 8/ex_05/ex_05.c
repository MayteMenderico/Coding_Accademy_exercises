#include <stdio.h>

int my_power_it(int nbr, int pw)
{
    int result = 1;
    for (int i = 0; i < pw; i++)
    {
        result = result * nbr;
    }
    return result;
}

void main()
{
    printf("%d\n", my_power_it(4, 12));
}
/*Turn in a function ‘my_power_it’. This function will take two integers in parameter, and must return an integer equal to the first parameter to the power of the second one (>= 0) using an iterative algorithm.
*/
