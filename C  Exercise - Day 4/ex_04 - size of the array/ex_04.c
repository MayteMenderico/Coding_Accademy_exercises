
#include <unistd.h>

void my_sort_int_tab(int *tab, int size) {
	int tmp;
	for(int i = 0; i < size - 1; i++) {
		for(int j = 0; j < size - i - 1; j++) {
			if(tab[j] > tab[j + 1]) {
				tmp = tab[j];
				tab[j] = tab[j + 1];
				tab[j + 1] = tmp;
			}
		}
	}
}

/*Write a function ‘my_sort_int_tab’, taking a array of integers as its first parameter, and the size of the array
as a second parameter. The function will sort the table in ascending order*/
