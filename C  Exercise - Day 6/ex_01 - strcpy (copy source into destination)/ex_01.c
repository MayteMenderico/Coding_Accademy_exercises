 
char *my_strcpy(char *destination, char *source)
{
    char *start = destination;
 
    while(*source != '\0')
    {
        *destination = *source;
        destination++;
        source++;
    }
 
    *destination = '\0';
    return start;
}
 /*Write a function ‘my_strcpy’ taking two pointers to a char as parameters. The first one is the destination
and the second one is the source. Your function must copy the source into the destination including the
terminating ‘\0’. The function must return a pointer to char which is the destination parameter.
The parameter used as destination will always be large enough to copy source into it in our tests, you don’t
have to handle this case in your code.
*/



    



