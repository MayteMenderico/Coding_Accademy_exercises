#include <stdio.h>
int my_str_isalpha(char *str);

int main () {
    char str1[6] = "Hello";
    char str2[7] = "Pony42";
    char str3[3] = "42";
    printf("%d\n", my_str_isalpha(str1));
    printf("%d\n", my_str_isalpha(str2));
    printf("%d\n", my_str_isalpha(str3));
}

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
