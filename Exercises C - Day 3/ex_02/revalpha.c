#include<unistd.h>

void my_putchar(char);
    void revalpha();

{
    char c;
    for (c = 'Z'; c >= 'A'; c--)
    {
        my_putchar (c);
    }
    my_putchar ('\n');
    
 }
