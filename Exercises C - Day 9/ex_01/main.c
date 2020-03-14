#include "rubiks.h"
#include <stdlib.h>

int main() {
    int **tab = NULL;

    tab = (int **)malloc(4 * sizeof(int *));

    for(int i = 0; i < 4; i++) {
        tab[i] = (int *)malloc(4 * sizeof(int));
        for(int j = 0; j < 4; j++) {
            tab[i][j] = j;
        }
    }

    print_tab(tab);
}
