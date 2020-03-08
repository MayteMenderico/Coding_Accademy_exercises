#include <stdio.h>

char *my_strupcase(char *str) {
    int size;
    for(size = 0; str[size] != '\0'; size++);
    char strTmp[size];

    for(int i = 0; i < size; i++) {
        strTmp[i] = str[i];
        if(strTmp[i] >= 97 && strTmp[i] <= 122) {
            strTmp[i] -= 32;
        }
    }

    printf("%s", strTmp);

    return str;
}

int main() {
    // printf("%s", my_strupcase("teste"));
    my_strupcase("test");
    return 0;
}

 
