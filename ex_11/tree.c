#include <stdio.h>

void tree(int size);

int main (){

    int rows;

    printf("Enter the number of rows:\n");
    scanf("%d", &rows);

    tree(rows);

    return 0;

}

void tree(int rows)
{

    int i,j;
    int star = 0;
    int space = 0;

    for(i = 0; i < rows; i++)
    {
        for(j = rows + 25; j >= i; j--)
            printf(" ");
        for(j = 0; j <= i; j++)
            printf("* ");

    printf("\n");
    }
    star = rows - 2;
    space = 28;

     for(i = 0; i < rows + 2; i++)
    {
        for(j = space; j >= i; j--)
            printf(" ");
        for(j = 1; j <= i+star; j++)
            printf("* ");

    printf("\n");
    }

    star = star + rows -2;
    space = space - rows + 2;

    for(i = 0; i < rows + 2; i++)
    {
        for(j = space; j >= i; j--)
            printf(" ");
        for(j = 1; j <= i+star; j++)
            printf("* ");

    printf("\n");
    }

    star = star + rows - 3;
    space = space - rows + 3;

    for(i = 0; i < rows + 3; i++)
    {
        for(j = space; j >= i; j--)
            printf(" ");
        for(j = 1; j <= i+star; j++)
            printf("* ");

    printf("\n");
    }

    star = star + rows - 2;
    space = space - rows + 2;

    for(i = 0; i < rows + 4; i++)
    {
        for(j = space; j >= i; j--)
            printf(" ");
        for(j = 1; j <= i+star; j++)
            printf("* ");

    printf("\n");
    }

    star = star + rows - 12;
    space = space - rows - 1 + 14;

    for(i = 0; i < rows; i++)
    {
        for(j = 0; j <= space; j++)
            printf(" ");
        for(j = 0; j <= star; j++)
            printf("|");

    printf("\n");
    }

}

