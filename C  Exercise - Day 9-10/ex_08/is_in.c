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