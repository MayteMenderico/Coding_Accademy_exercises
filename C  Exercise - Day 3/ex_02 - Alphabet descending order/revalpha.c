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
/*Write a function that displays the alphabet in uppercase on a single line, in descending order from the letter
‘Z’ followed by a ‘\n’
*/
