#include "rubiks.h"
#include <stdlib.h>

int main() {
	int **table = (int **)malloc(4 * sizeof(int *));
	for(int i = 0; i < 4; i++) {
		table[i] = (int *)malloc(4 * sizeof(int));
	}

	table[0][0] = 0;
	table[0][1] = 0;
	table[0][2] = 1;
	table[0][3] = 1;

	table[1][0] = 0;
	table[1][1] = 0;
	table[1][2] = 1;
	table[1][3] = 1;

	table[2][0] = 2;
	table[2][1] = 2;
	table[2][2] = 3;
	table[2][3] = 3;

	table[3][0] = 2;
	table[3][1] = 2;
	table[3][2] = 3;
	table[3][3] = 3;

	algo_line(table, 0);
	algo_column(table, 0);
	algo_square(table, 0);

	return 0;
}

