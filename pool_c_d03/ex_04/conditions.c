#include<unistd.h>

void my_putchar(char);
    void conditions(int n)

    {
        if(n < 0)
{
        my_putchar('-');
}
        
        if(n > 0)
{
        my_putchar('+');
}
        if(n==0)
{
        my_putchar('0');
}
        }
int main()
{
conditions(-564);
conditions(546);
conditions(0);
return(0);
}
            
