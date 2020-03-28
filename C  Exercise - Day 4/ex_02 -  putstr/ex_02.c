#include<unistd.h>

void my_putchar(char c);
void my_putstr(char* str)
{
    int i = 0;
    while(*(str + i) != '\0') {
        my_putchar("%c", *(str+i));
        i++;
    }

}

/*Write a function ‘my_putstr’, taking a string as parameter and displaying it on the standard output.*/

