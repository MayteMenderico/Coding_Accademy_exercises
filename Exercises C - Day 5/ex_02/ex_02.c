#include <stdio.h>

char *my_revstr(char *str);

int main() {
    char str[6] = "Hello";
    printf("%s\n", my_revstr(str));
    return 0;
}

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
