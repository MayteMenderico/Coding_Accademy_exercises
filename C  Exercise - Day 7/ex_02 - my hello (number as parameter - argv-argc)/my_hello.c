#include <stdio.h>
#include <stdlib.h>

int main(int argc, char **argv)
{

    if (argc < 2)
    {
        printf("Error.\n");
        
    }

    else{
        int nbr = atoi(argv[1]);
        if(nbr > 0){
            for(int i = 0; i < nbr; i++){
                printf("Hello\n");

            }
         }
        else{
            printf("Error.\n");

        }
        
    }
    return (0);
}
/*Write a software ‘my_hello’ taking a number in parameter. This function must display “Hello” followed by
a newline as many time as the number passed in parameter. If nothing is given, or if the number given is
negative or null, or if the given parameter is not a number, you should print “Error.” followed by a newline.
*/
