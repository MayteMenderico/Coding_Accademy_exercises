#ifndef RUBIKS_H
#define RUBIKS_H

#define PRINT_SQUARE_DEBUG_ 1

#define EMPTY 0
#define BLOCKED 1

void print_tab(int **tab);

void algo_line(int **tab, int line);
void algo_column(int **tab, int column);
void algo_square(int **tab, int square);

void algo_line_reverse(int **tab, int line);
void algo_column_reverse(int **tab, int column);
void algo_square_reverse(int **tab, int square);

int is_in_line(int **tab, int line, int value);
int is_in_col(int **tab, int column, int value);

int *look_for_space(int **table, int *lines, int *columns, int value);

int *look_for_value(int **table, int *lines, int *columns, int value);
#endif
