#include "tree.h"

// Desenha o tronco da arvore
void draw_trunk(int size, int last_row_size) {
    for(int i = 0; i < size; i++) {
        put_spaces(size, last_row_size);
        for(int j = 0; j < size; j++) {
            my_putchar('|');
        }
        my_putchar('\n');
    }
}

// Conta quantas estrelas irao ter na ultima linha da arvore, necessario
// para saber quantos espacos vao necessitar
int count_last_row(int size) {
    int rowsNumber = 4;
    int starsNumber = 1;

    for(int i = 0; i < size; i++) {
        for(int j = 0; j < rowsNumber; j++) {
            starsNumber = starsNumber + 2;
        }
        rowsNumber = rowsNumber + 1;
        starsNumber = starsNumber - 4;
    }

    starsNumber = starsNumber + 2;
    return starsNumber;
}

// Coloca os espacos necessarios
void put_spaces(int starsNumber, int last_row_size) {
    for(int i = 0; i < (last_row_size / 2) - (starsNumber / 2); i++) {
        my_putchar(' ');
    }
}

void tree(int size) {
    int rowsNumber = 4;
    int starsNumber = 1;
    int last_row_size = count_last_row(size);

    if (size == 0) {
        return;
    }

    for(int i = 0; i < size; i++) {
        for(int j = 0; j < rowsNumber; j++) {
            put_spaces(starsNumber, last_row_size);
            for(int k = 0; k < starsNumber; k++) {
                my_putchar('*');
            }
            my_putchar('\n');
            starsNumber = starsNumber + 2;
        }
        rowsNumber = rowsNumber + 1;
        starsNumber = starsNumber - 4;
    }


    draw_trunk(size, last_row_size);
}