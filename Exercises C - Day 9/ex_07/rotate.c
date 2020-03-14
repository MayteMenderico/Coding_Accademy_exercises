#include "rubiks.h"

void rotate_lines(int **table, int line, int offset) {
	if(offset != 0) {
		if (offset > 0) {
			for (int i = 0; i < offset; i++) {
				algo_line(table, line);	
			}
		} else {
			for (int i = offset; i < 0; i++) {
 				algo_line_reverse(table, line);	
 			} 
		}
	}
}

void rotate_columns(int **table, int column, int offset) {

	if(offset != 0) {
		if (offset > 0) {
			for (int i = 0; i < offset; i++) {
				algo_column(table, column);	
			}
		} else {
			for (int i = offset; i < 0; i++) {
 				algo_column_reverse(table, column);	
 			} 
		}
	}
}
