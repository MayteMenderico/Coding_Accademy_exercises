
#include <stdio.h>

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

int main() {
	int array[] = {5, 4, 3, 2, 1};

	my_sort_int_tab(array, 5);

	for(int i = 0; i < 5; i++) {
		printf("%d ", array[i]);
	}
}
