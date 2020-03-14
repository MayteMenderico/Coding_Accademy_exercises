#include <unistd.h>


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
/*Write a function ‘my_putnbr_base’, taking a number as it first parameter and a string as it second parameter representing a base. Your function must display the number in the given base. The function will always
return the number passed as parameter*/
