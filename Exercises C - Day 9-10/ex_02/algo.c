#include "rubiks.h"
#include <unistd.h>

void algo_line(int **tab, int line) {
	int tmp = tab[line][0];

	for(int i = 0; i < 3; i++) {
		tab[line][i] = tab[line][i + 1]; 
	}
	tab[line][3] = tmp;

	if(PRINT_SQUARE_DEBUG_) {
		char *message = "Rotate Left Line ";
		char l = line + '0';
		char lineBreak = '\n';
		char point = '.';

		write(1, message, 17);
		write(1, &l, 1);
		write(1, &point, 1);
		write(1, &lineBreak, 1);
		
		print_tab(tab);	
	}
}

void algo_column(int **tab, int column) {
	int tmp = tab[0][column];

	for(int i = 0; i < 3; i++) {
		tab[i][column] = tab[i + 1][column];
	}
	tab[3][column] = tmp;

	if(PRINT_SQUARE_DEBUG_) {
		char *message = "Rotate Top Column ";
		char l = column + '0';
		char lineBreak = '\n';
		char point = '.';

		write(1, message, 18);
		write(1, &l, 1);
		write(1, &point, 1);
		write(1, &lineBreak, 1);

		print_tab(tab);
	}
}

void algo_square(int **tab, int square) {
	int tmp;

	tmp = tab[square][square];

	tab[square][square] = tab[square + 1][square];	
	tab[square + 1][square] = tab[square + 1][square + 1];	
	tab[square + 1][square + 1] = tab[square][square + 1];	
	tab[square][square + 1] = tmp;

	if(PRINT_SQUARE_DEBUG_) {
		char *message = "Rotate Clockwise square ";
		char l = square + '0';
		char lineBreak = '\n';
		char point = '.';

		write(1, message, 24);
		write(1, &l, 1);
		write(1, &point, 1);
		write(1, &lineBreak, 1);

		print_tab(tab);
	}
}
/*void algo_line(int **table, int line);
• void algo_column(int **table, int column);
• void algo_square(int **table, int square);
Write three algorithm to play with your magic square:
• algo_line, taking the table and the line number as parameter.
this function must rotate this single line on the Left.
• algo_column, taking the table and the column number as parameter.
This function must rotate this single column on the Top.
• algo_square, taking the table and the square number as parameter.
This function must rotate this single square Clockwise.
You must also create a define PRINT_SQUARE_DEBUG_. If this define is set to 1, you have to display the
rotation way and the square, otherwise you shouldn’t.
*/
