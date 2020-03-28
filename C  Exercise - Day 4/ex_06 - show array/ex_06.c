#include <unistd.h>
void my_putchar(char c);
void my_show_array(char **tab, int size)
{
    char *tmp;
    for (int i = 0; i < size - 1; i++)
    {
        for (int j = 0; j < size - 1 - 1; j++)
        {
            if (sizeof(tab[j]) > sizeof(tab[j + 1]))
            {
                tmp = tab[j];
                tab[j] = tab[j + 1];
                tab[j + 1] = tmp;
            }
        }
    }

    for (int i = 0; i < size; i++)
    {
        for (int j = 0; tab[i][j] != '\0'; j++)
        {
            my_putchar((tab[i][j]));
        }
            my_putchar('\n');
    }
}
/*Write a function ‘my_show_array’, taking an array of string as parameter and displaying the strings from
the shortest to the longest one. The function will also take the size of the array as second parameter. If
multiple strings have the same length, you will order them from the one having the greater ASCII value to
the lesser one. If there are still some equality you must display them following their indexes. For example
“you” and “uoy” are perfectly equal, so if tab[0] = “you”, you must display “you” before “uoy”.
Every string must be followed by a ‘\n’.
Remember that there must always be a null terminated byte in a string. This is how you should test your
function :
*/
