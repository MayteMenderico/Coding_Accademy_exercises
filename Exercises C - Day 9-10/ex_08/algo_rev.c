#include "rubiks.h"
#include <unistd.h>

void algo_line_reverse(int **tab, int line) {
	int tmp = tab[line][3];

	for(int i = 3; i > 0; i--) {
		tab[line][i] = tab[line][i - 1]; 
	}
	tab[line][0] = tmp;

	if(PRINT_SQUARE_DEBUG_) {
		char *message = "Rotate Right Line ";
		char l = line + '0';
		char lineBreak = '\n';
		char point = '.';

		write(1, message, 18);
		write(1, &l, 1);
		write(1, &point, 1);
		write(1, &lineBreak, 1);
		
		print_tab(tab);	
	}
}

void algo_column_reverse(int **tab, int column) {
	int tmp = tab[3][column];

	for(int i = 3; i > 0; i--) {
		tab[i][column] = tab[i - 1][column];
	}
	tab[0][column] = tmp;

	if(PRINT_SQUARE_DEBUG_) {
		char *message = "Rotate Down Column ";
		char l = column + '0';
		char lineBreak = '\n';
		char point = '.';

		write(1, message, 19);
		write(1, &l, 1);
		write(1, &point, 1);
		write(1, &lineBreak, 1);

		print_tab(tab);
	}
}

void algo_square_reverse(int **tab, int square) {
	int tmp;

	tmp = tab[square + 1][square];

	tab[square + 1][square] = tab[square][square];	
	tab[square][square] = tab[square + 1][square];	
	tab[square][square + 1] = tab[square + 1][square + 1];	
	tab[square + 1][square + 1] = tmp;

	if(PRINT_SQUARE_DEBUG_) {
		char *message = "Rotate Counter Clockwise square ";
		char l = square + '0';
		char lineBreak = '\n';
		char point = '.';

		write(1, message, 33);
		write(1, &l, 1);
		write(1, &point, 1);
		write(1, &lineBreak, 1);

		print_tab(tab);
	}
}