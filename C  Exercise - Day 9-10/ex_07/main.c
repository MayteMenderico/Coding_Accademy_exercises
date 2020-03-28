#include <stdlib.h>
#include "rubiks.h"
#include <stdio.h>

int main()
{
    int **table = (int **)malloc(4 * sizeof(int *));
	for(int i = 0; i < 4; i++) {
		table[i] = (int *)malloc(4 * sizeof(int));
	}
    table[0][0] = 0;
    table[0][1] = 2;
    table[0][2] = 0;
    table[0][3] = 0;

    table[1][0] = 0;
    table[1][1] = 3;
    table[1][2] = 1;
    table[1][3] = 3;

    table[2][0] = 2;
    table[2][1] = 2;
    table[2][2] = 1;
    table[2][3] = 3;

    table[3][0] = 1;
    table[3][1] = 1;
    table[3][2] = 3;
    table[3][3] = 2;

    int lines[4];
    int columns[4];

    int *ret_value;
    int *ret_space;

    lines[0] = BLOCKED;
    lines[1] = EMPTY;
    lines[2] = BLOCKED;
    lines[3] = BLOCKED;
    columns[0] = EMPTY;
    columns[1] = EMPTY;
    columns[2] = EMPTY;
    columns[3] = EMPTY;

	ret_value = look_for_value(table, lines, columns, 0);

	lines[0] = EMPTY;
	lines[1] = BLOCKED;

	ret_space = look_for_space(table, lines, columns, 0);

	rotate_lines(table, ret_value[0], ret_value[1] - ret_space[1]);
	print_tab(table);

	rotate_columns(table, ret_space[1], ret_value[0] - ret_space[0]);
	print_tab(table);
	
    return 0;
}
