#include <stdlib.h>

int *my_up(int nbr) {
	int *array = (int *)malloc(2*sizeof(int));

	array[0] = nbr;
	array[1] = nbr * 2;

	return array;
}


/*Write a function ‘my_up’ taking an integer as parameter. This function must return an allocated array of
two elements. The first element must be the number given in the parameter and the second one the same
number multiplied by 2.
*/
    
            
    


