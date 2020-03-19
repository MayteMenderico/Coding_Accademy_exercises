#include <stdlib.h>
#include <stdio.h>

int calculate_value(int n, int k) 
{ 
    int res = 1; 
    if (k > n - k) 
    k = n - k; 
    for (int i = 0; i < k; ++i) 
    { 
        res *= (n - i); 
        res /= (i + 1); 
    } 
      
    return res; 
} 

int **pascal_tr(int size) {
    int **tr = (int **)malloc(size * sizeof(int *));

    for (int i = 0; i < size; i++) 
    {
        tr[i] = (int *)malloc((i + 1) * sizeof(int));
        for (int j = 0; j <= i; j++) {
            tr[i][j] = calculate_value(i, j);
        }
    } 

    return tr;
}

int main() {
    int **tr;
    int size = 6;

    tr = pascal_tr(size);

    for (int i = 0; i < size; i++) {
        for (int j = 0; j < i + 1; j++) {
            printf("%d ", tr[i][j]);
        }
        printf("\n");
    }
}