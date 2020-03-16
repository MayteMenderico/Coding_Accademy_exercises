#include "rubiks.h"
#include <stdlib.h>
#include <stdio.h>

int main() {
	int **table = (int **)malloc(4 * sizeof(int *));
	for(int i = 0; i < 4; i++) {
		table[i] = (int *)malloc(4 * sizeof(int));
		for(int j = 0; j < 4; j++) {
			table[i][j] = j;
		}
	}

	printf("%d - %d\n", is_in_line(table, 0, 1), is_in_col(table, 2, 3));
	printf("%d - %d\n", is_in_line(table, 3, 1), is_in_col(table, 2, 0));
	
	return 0;
}
