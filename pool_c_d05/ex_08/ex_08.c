#include <stdio.h>

int my_putnbr_base(int nbr, char *base);

int main() {
    my_putnbr_base(42, "0123456789");
    my_putnbr_base(42, "0123456789ABCDEF");
    my_putnbr_base(42, "9876543210");
    my_putnbr_base(42, "+-*/%()-_=");
}

int my_putnbr_base(int nbr, char *base) {
    char tmp[50];
    int count = 0;

    for(int i = 0; i < 50; i++) {
        tmp[i] = '!';
    }

    sprintf(tmp, "%d", nbr);

    for(int i = 0; i < 50; i++) {
        if(tmp[i] != '!') {
            count++;
        }
    }

    char tmp2[count];

    for(int i = 0; i < count; i++) {
        tmp2[i] = base[((int)tmp2[i])+1];
    }

    return (int)tmp2;
}
