#include <unistd.h>

void my_putchar(char);
void conditions(int n)

{
        if (n < 0)
        {
                my_putchar('-');
        }

        if (n > 0)
        {
                my_putchar('+');
        }
        if (n == 0)
        {
                my_putchar('0');
        }
}
/*Write a function ‘conditions’ taking a number as parameter. This function will print ‘+’ if the number is greater
than 0, ‘-’ if the number is lesser than 0 and ‘0’ otherwise.
*/
