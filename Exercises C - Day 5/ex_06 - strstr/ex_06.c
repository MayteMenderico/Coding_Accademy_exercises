#include <unistd.h>


char *my_strstr(char *str1, char *str2)
    
{
    
    for(int i = 0; str2[i] != '\0'; i++){
        int j;
        for(j = 0; str1[j] != '\0'; j++){
            if(str1[j] == str2[i]){
                return (&str1[j]);

                

            }
            



        } 
    }   
}
/*Write a function ‘my_strstr’ reproducing the behavior of the function strstr*/

