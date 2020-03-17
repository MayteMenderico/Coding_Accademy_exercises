#include <stdlib.h>
#include <stdio.h>

int **split_array(int *arr, int size, int *new_size1, int *new_size2) {
    int oddCount = 0;
    int evenCount = 0;

    int **newArray = (int **)malloc(2 * sizeof(int *));
    newArray[0] = (int *)malloc(size * sizeof(int));
    newArray[1] = (int *)malloc(size * sizeof(int));

    for(int i = 0; i < size; i++) {
        if((arr[i] % 2) == 0) {
            newArray[1][evenCount] = arr[i];
            evenCount++;
        } else {
            newArray[0][oddCount] = arr[i];
            oddCount++;
        }
    }

    *new_size1 = oddCount;
    *new_size2 = evenCount;

    return newArray;
}

int main() {
    int *size1 = (int *)malloc(sizeof(int));
    int *size2 = (int *)malloc(sizeof(int));
    int arr[] = {1, 2, 4, 6, 7};
    int **new_array;
    int size = 5;

    
    new_array = split_array(arr, size, size1, size2);

    for(int i = 0; i < *size1; i++) {
        printf("%d ", new_array[0][i]);
    }
    printf("\n");

    for(int i = 0; i < *size2; i++) {
        printf("%d ", new_array[1][i]);
    }
    printf("\n");
}