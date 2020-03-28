#include "rubiks.h"
#include <unistd.h>

void build_first_line(int **table) {
    int lines[4];
    int columns[4];

    int *ret_value;
    int *ret_space;

    columns[0] = EMPTY;
    columns[1] = EMPTY;
    columns[2] = EMPTY;
    columns[3] = EMPTY;

    for (int i = 0; i < 4; i++) {
        lines[0] = BLOCKED;
        lines[1] = EMPTY;
        lines[2] = EMPTY;
        lines[3] = EMPTY;

        ret_value = look_for_value(table, lines, columns, 0);

        lines[0] = EMPTY;
        lines[1] = BLOCKED;
        lines[2] = BLOCKED;
        lines[3] = BLOCKED;

        ret_space = look_for_space(table, lines, columns, 0);

        if(ret_value != NULL && ret_space != NULL) {
            rotate_lines(table, ret_value[0], ret_value[1] - ret_space[1]);
            rotate_columns(table, ret_space[1], ret_value[0] - ret_space[0]);
        }
    }	
}

void line_to_square(int **table, int line) {
    algo_square(table, 0);
    algo_square(table, 0);

    rotate_lines(table, 0, -2);
}