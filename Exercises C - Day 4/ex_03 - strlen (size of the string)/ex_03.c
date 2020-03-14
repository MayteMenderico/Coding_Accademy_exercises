#include <unistd.h>

int my_strlen(char *str) {
	int i;

	for(i = 0; str[i] != '\0'; i++);

	return i;
}
/*Write a function ‘my_strlen’, taking a string as parameter and returning its size.*/

