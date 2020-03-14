#include <stdio.h>
/*
Write a software ‘my_show_args’ displaying on the standard output the input parameters followed by a
newline. If no parameter is given, you will show only a newline.
*/
int main(int argc, char *argv[]) {
	if(argc <= 1) {
		printf("\n");
	} else {
		for(int i = 1; i < argc; i++) {
			printf("%s\n", argv[i]);
		}
	}
	return 0;
}

