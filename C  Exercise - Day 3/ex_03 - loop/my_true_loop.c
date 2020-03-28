#include<unistd.h>

void my_putchar(char);
    void my_true_loop(unsigned int n)

{
int i;
 for(i=0; i<=n; i++)
{
my_putchar('+');
}
my_putchar('\n');
}


/*Write a function ‘my_true_loop’, taking a number as parameter. This function will print a number of ‘+’ equal
to this parameter followed by a ‘\n’
*/

