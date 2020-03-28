#include <stdlib.h>

void my_putstr(char *);

char *my_concat_str(char **tab){
    int count = 0;
    
    for (int i = 0; tab[i] != NULL; i++){
         for(int j = 0; tab[i][j] != '\0'; j++){

                count++;
                
         }   

    }
    char *str = (char *)malloc(count*sizeof(char)+10);
     
    count = 0;
    for (int i = 0; tab[i] != NULL; i++){
         for(int j = 0; tab[i][j] != '\0'; j++){

                str[count] = tab[i][j];
                count++;
                
         }   

    }
    str[count] = '\0';
    return (str);     
    


}
/*Write a function ‘my_concat_str’, taking a double array of char as parameter. Your function will return a
sufficiently allocated string of char terminated by a textbackslash 0’, which contains each word of the array
concatenated one after another. The array will be terminated by a null value
*/
