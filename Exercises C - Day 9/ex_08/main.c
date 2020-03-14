#include <stdlib.h>
#include "rubiks.h"
#include <stdio.h>

void build_first_square(int **table)
{
    print_tab(table);
    build_first_line(table);
    line_to_square(table, 0);
}

int main()
{
    int **table = (int **)malloc(4 * sizeof(int *));
	for(int i = 0; i < 4; i++) {
		table[i] = (int *)malloc(4 * sizeof(int));
        for(int j = 0; j < 4; j++) {
            table[i][j] = j;
        }
	}

    build_first_square(table);
    print_tab(table);
	
    return 0;
}
