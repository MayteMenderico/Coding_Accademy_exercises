#ifndef RUBIKS_H
#define RUBIKS_H

#define PRINT_SQUARE_DEBUG_ 0

void print_tab(int **tab);

void algo_line(int **tab, int line);
void algo_column(int **tab, int column);
void algo_square(int **tab, int square);

#endif
