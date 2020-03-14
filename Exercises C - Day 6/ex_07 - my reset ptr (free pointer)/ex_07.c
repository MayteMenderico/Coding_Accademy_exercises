#include <stdlib.h>

void my_reset_ptr(char **str) {
	free(*str);
	*str = NULL;
}
/*Write a function ‘my_reset_ptr’ taking a pointer to a pointer of char as parameter. This function will return nothing and must free the pointer pointed by the parameter. After freeing it you must set this pointer
to NULL.
*/

