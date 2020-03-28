#include <unistd.h>



char *my_revstr(char *str) {
    int size;
    for(size = 0; str[size] != '\0'; size++);
    char strTmp[size];

    for(int i = size - 1; i >= 0; i--) {
        strTmp[i] = str[size - i - 1];
    }

    for(int i = 0; i < size; i++) {
        str[i] = strTmp[i];
    }

    return str;
}
/*Write a function ‘my_revstr’, taking a string as parameter and returning it in reverse
*/
