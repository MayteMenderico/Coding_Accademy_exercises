#include <unistd.h>


int my_strcmp(char *str1, char *str2) {
    int difference = 0;
    for(int i = 0; str1[i] != '\0'; i++) {
        if(str1[i] != str2[i]) {
            difference = str2[i] - str1[i];
        }
    }
    return difference;
}

/*Write a function ‘my_strcmp’, taking two string as parameters. Reproducing the behavior of the function
“strcmp”, Careful, some strcmp function only return (-1, 0 or 1), that is not the behavior that we expect.*/
