#include <unistd.h>

char *my_strupcase(char *str) {
    for(int i = 0; str[i] != '\0'; i++) {
        if(str[i] >= 97 && str[i] <= 122) {
            str[i] = str[i] - 32;
        }
    }
    
    return str;
}
 
/*Write a function ‘my_strupcase’, taking a string as parameter and returning the string with every letter in
uppercase*/
