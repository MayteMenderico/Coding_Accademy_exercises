#include <unistd.h>

void my_show_str(char **tab) {
	char newLine = '\n';
	for(int i = 0; tab[i] != NULL; i++) {
		for(int j = 0; tab[i][j] != '\0'; j++){
			write(1, &(tab[i][j]), 1);
		}
		write(1, &newLine, 1);
	}
}
 /*Write a function ‘my_show_str’, taking a double array of chars as parameter and returning nothing. Your
function must display each string of chars contained in the array followed by a newline. The array will be
terminated by a null value.
*/

