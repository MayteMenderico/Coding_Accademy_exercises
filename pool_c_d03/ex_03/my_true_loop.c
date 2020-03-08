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

int main ()
{
my_true_loop(5);
return (0);
}    


