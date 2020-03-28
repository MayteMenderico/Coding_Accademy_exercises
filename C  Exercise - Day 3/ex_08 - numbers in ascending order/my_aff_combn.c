#include<unistd.h>

void my_putchar(char);
    int my_aff_combn(int n)

    {
        int n,i;
for (n=0;n<10;n++)
{
for (i=0;i<10;i++)

{
if(n != i)
{
my_putchar("%d%d",n,i)
}
}
}
}
int main ()
{
my_aff_combn(2);
return 0;
}
/*Write a function that displays all the different combinations of n digits in the ascending order like in the
example.*/
