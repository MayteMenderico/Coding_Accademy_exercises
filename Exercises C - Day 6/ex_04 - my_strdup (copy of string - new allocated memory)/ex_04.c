
#include <stdlib.h>


char *my_strdup(char *str) {
	char *tmp = (char *)malloc(sizeof(str));
	
	for(int i = 0; str[i] != '\0'; i++) {
		tmp[i] = str[i];
	}
	return tmp;
}

/*Write a function ‘my_strdup’, taking a string in parameter. Your function must return a copy of the string
in a new allocated memory space.
*/
