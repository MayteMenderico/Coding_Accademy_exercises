#include<stdio.h>
#include<stdlib.h>

int *merge_array(int *arr1, int *arr2, int size1, int size2) {
    int *arr = (int *)malloc((size1 + size2) * sizeof(int));

    for (int i = 0; i < size1; i++) {
        arr[i] = arr1[i];
    }

    for (int i = 0; i < size2; i++) {
        arr[i + size1] = arr2[i];
    }

    return arr;
}

int main() {
    int arr1[] = {1, 2, 3};
    int arr2[] = {4, 5, 6, 7, 8, 9};

    int *arr = merge_array(arr1, arr2, 3, 6);

    for(int i = 0; i < 9; i++) {
        printf("%d ", arr[i]);
    }
}