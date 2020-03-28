#include <unistd.h>


int my_str_isalpha(char *str) {
    for(int i = 0; str[i] != '\0'; i++) {
        if(str[i] < 65 || str[i] > 122) {
            return 0;
        }
        if(str[i] >= 91 && str[i] <= 96) {
            return 0;
        }
    }
    return 1;
}
/*Write a function ‘my_str_isalpha’, taking a string as parameter and returning 1 if the string passed as parameter contains only alphabetical characters, otherwise it should return 0.*/
