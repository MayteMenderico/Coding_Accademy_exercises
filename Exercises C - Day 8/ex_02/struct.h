#ifndef STRUCT_H
#define STRUCT_H

typedef struct s_my_struct {
    int id;
    char *str;
}t_my_struct;

#endif  /* !defined(STRUCT_H) */

/*Now you must define a typedef so that the type of your structure changes from “struct s_my_struct” to
“t_my_struct” to increase writing and readability.
Write a function ‘my_init’ in a file named ‘ex_02.c’ and using your structure from exercise 1. Your function
will take a t_my_struct pointer in parameter. You should set the ‘id’ field of the structure to 0 and the ‘str’
field to NULL.
*/
