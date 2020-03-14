#include "rubiks.h"
#include <stdlib.h>

int main() {
	int **table = (int **)malloc(4 * sizeof(int *));
	for(int i = 0; i < 4; i++) {
		table[i] = (int *)malloc(4 * sizeof(int));
		for(int j = 0; j < 4; j++) {
			table[i][j] = j;
		}
	}

	algo_line(table, 0);
	algo_column(table, 0);
	algo_square(table, 0);

	return 0;
}
