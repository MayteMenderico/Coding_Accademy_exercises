#include<stdio.h>

int array_sum(int *tab, int size){

 int sum = 0;

    for (int i = 0; i < size; i++) {
       sum = sum + tab[i];
    }
    return sum; 

}

int main ()
{
    int tab[] = {3, 4, 5};
    
      
    printf("%d\n",array_sum(tab, 3));
    return (0);
    
}
