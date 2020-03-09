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
            
