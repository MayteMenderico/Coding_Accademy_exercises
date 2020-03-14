#include "rubiks.h"
#include <stdlib.h>

int *look_for_space(int **table, int *lines, int *columns, int value) {
    int *result = (int *)malloc(2 * sizeof(int));

    for(int line = 0; line < 4; line++) {
        if (lines[line] == EMPTY) {
            for(int column = 0; column < 4; column++) {
                if (columns[column] == EMPTY) {
                    if(table[line][column] != value) {
                        result[0] = line;
                        result[1] = column;
                        return result;
                    }
                }
            }
        }
    }

    free(result);
    return NULL;
}