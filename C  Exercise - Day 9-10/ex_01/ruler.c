#include <unistd.h>

void print_tab(int **tab) {
	char nbr;
	char *line = "-----------------";
	char between = '|';
	char lineBreak = '\n';
	char space = ' ';
	
    for(int i = 0; i < 4; i++) {
    	write(1, line, 17);
    	write(1, &lineBreak, 1);
    	
        for(int j = 0; j < 4; j++) {
			nbr = tab[i][j] + '0';
			write(1, &between, 1);
			write(1, &space, 1);
			write(1, &nbr, 1);
			write(1, &space, 1);
        }
		write(1, &between, 1);
		write(1, &lineBreak, 1);
    }
	write(1, line, 17);
	write(1, &lineBreak, 1);
	write(1, &lineBreak, 1);
}    
 /*Write a function ‘print_tab’ taking a pointer of pointer on integers as parameter and returning nothing. This
parameter is a four columns by four row table. You have to allocate it (with ‘malloc()’) in your main().
This function will produce the following output:
*/
