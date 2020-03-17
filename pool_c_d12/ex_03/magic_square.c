int magic_square(int *sqr) {
    int isMagicSquare = 0;
    int magicSum = 0;
    int lineSum = 0;
    int columnSum = 0;

    for(int i = 0; i < 3; i++) {
        magicSum = magicSum + sqr[i];
    }

    for(int i = 0; i < 3; i++) {
        lineSum = sqr[i * 3] + sqr[(i * 3) + 1] + sqr[(i * 3) + 2];
        columnSum = sqr[i] + sqr[i + 3] + sqr[i + 6];

        if(columnSum != magicSum || lineSum != magicSum) {
            isMagicSquare = 1;
        }
    }

    if((sqr[0] + sqr[4] + sqr[8]) != magicSum) {
        isMagicSquare = 1;
    }
    if((sqr[2] + sqr[4] + sqr[6]) != magicSum) {
        isMagicSquare = 1;
    }

    return isMagicSquare;
}

int main() {
    int sqr1[] = {8, 1, 6, 3, 5, 7, 4, 9, 2};
    int sqr2[] = {1, 2, 3, 4, 5, 6, 7, 8, 9};

    magic_square(sqr1);
    magic_square(sqr2);
}