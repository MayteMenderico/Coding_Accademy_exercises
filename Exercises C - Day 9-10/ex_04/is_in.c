int is_in_line(int **tab, int line, int value) {
    int is_in_line = 1;

    for (int i = 0; i < 4; i++) {
        if (tab[line][i] == value) {
            is_in_line = 0;
        }
    }

    return is_in_line;
}

int is_in_col(int **tab, int column, int value) {
    int is_in_col = 1;

    for (int i = 0; i < 4; i++) {
        if (tab[i][column] == value) {
            is_in_col = 0;
        }
    }

    return is_in_col;
}
/*Write two similar functions ‘is_in_col’ and ‘is_in_line’.
They are taking the table as first argument, the column/line number as second argument, and the value
you are looking for as the last argument.
Your functions should return 0 if the given value is in the column/line, 1 otherwise.
Adding this piece of code to the previous one
*/
