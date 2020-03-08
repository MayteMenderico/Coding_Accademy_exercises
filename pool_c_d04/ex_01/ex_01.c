#include<stdio.h>

void my_swap(int *, int *);


int main(){
    int nb1 = 42;
    int nb2 = 21;
    
    printf("%d - %d\n",nb1,nb2);
    my_swap(&nb1, &nb2);
    printf("%d - %d\n",nb1,nb2);
    
}

void my_swap(int* nb1, int* nb2)
{
    int aux;
    aux = *nb1;
    *nb1 = *nb2;
    *nb2 = aux;    
}


