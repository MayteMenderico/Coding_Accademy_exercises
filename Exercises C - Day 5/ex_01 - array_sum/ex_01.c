#include<unistd.h>

int array_sum(int *tab, int size){

 int sum = 0;

    for (int i = 0; i < size; i++) {
       sum = sum + tab[i];
    }
    return sum; 

}

/*Write a function ‘array_sum’, taking an array of interger and its size as parameter. This function must return the sum of the integers containd in the array
*/
