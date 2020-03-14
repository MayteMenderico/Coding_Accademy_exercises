#include<unistd.h>



void my_swap(int* nb1, int* nb2)
{
    int aux;
    aux = *nb1;
    *nb1 = *nb2;
    *nb2 = aux;    
}

/*Write a function ‘my_swap’, taking two pointers to an integer as parameters. This function must not return anything but the value of the two variables passed in parameter must be swapped.*/
