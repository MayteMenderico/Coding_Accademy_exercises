#include<unistd.h>

void my_putstr(char* str)
void my_putchar(char c)

{
    int i = 0;
    while(*(str + i) != '\0') {
        my_putchar("%c", *(str+i));
        i++;
    }

}


int main(){
    char str[5] = "hello";

    my_putstr(str);

}

