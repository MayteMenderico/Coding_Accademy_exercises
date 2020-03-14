#include <unistd.h>
void my_putchar(char c);
void my_putnbr(int n);

int my_aff_comb2()
{

    for (int i = 0; i < 99; i++)
    {

        for (int j = 1; j <= 99; j++)
        {
            if (i < 10)
            {
                my_putchar('0');

            }
            my_putnbr(i);
            my_putchar(' ');
            if (j < 10)
            {
                my_putchar('0');

            }
            my_putnbr(j);
            if (j != 99){
              my_putchar(',');  
            }
            

        }
    }
    return (0);
}

int my_aff_comb2();
int main()
{
    my_aff_comb2();
    return (0);
}
/*Write a function that displays all the different combinations of two numbers between 0 and 99, in ascending order
*/
