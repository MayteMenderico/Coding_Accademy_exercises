#include <stdlib.h>
#include "rubiks.h"
#include <stdio.h>

void verif_return(int *ret) {
    if (ret != NULL)
        printf("line :\t%d\nColumn :\t%d\n", ret[0], ret[1]);
    else
        printf("Nothing found in the given range.\n");
}
int main()
{
    int **table = (int **)malloc(4 * sizeof(int *));
	for(int i = 0; i < 4; i++) {
		table[i] = (int *)malloc(4 * sizeof(int));
	}
    table[0][0] = 2;
    table[0][1] = 1;
    table[0][2] = 3;
    table[0][3] = 0;

    table[1][0] = 0;
    table[1][1] = 0;
    table[1][2] = 1;
    table[1][3] = 1;

    table[2][0] = 2;
    table[2][1] = 2;
    table[2][2] = 3;
    table[2][3] = 0;

    table[3][0] = 2;
    table[3][1] = 3;
    table[3][2] = 1;
    table[3][3] = 3;

    print_tab(table);

    int lines[4];
    int columns[4];

    lines[0] = BLOCKED;
    lines[1] = BLOCKED;
    lines[2] = EMPTY;
    lines[3] = BLOCKED;
    columns[0] = EMPTY;
    columns[1] = EMPTY;
    columns[2] = BLOCKED;
    columns[3] = BLOCKED;

    verif_return(look_for_space(table, lines, columns, 1));
    verif_return(look_for_space(table, lines, columns, 2));

    return 0;
}
