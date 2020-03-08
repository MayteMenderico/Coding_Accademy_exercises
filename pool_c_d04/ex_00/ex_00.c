#include<stdio.h>

void my_init(int* i);


int main(){
    int i;
    my_init(&i);
    printf("%d",i);
}

void my_init(int* i){
    *i = 42;
}


    
