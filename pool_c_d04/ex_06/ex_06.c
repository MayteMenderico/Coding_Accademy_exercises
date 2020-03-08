#include <stdio.h>

void my_show_array(char **tab, int size) {
	char *tmp;
	for(int i = 0; i < size; i++) {
		for(int j = 0; j < size; j++) {
			if(sizeof(tab[j]) > sizeof(tab[j + 1])) {
				tmp = tab[j];
				tab[j] = tab[j + 1];
				tab[j + 1] = tmp;
				
			}
		}
	}

    for(int i = 0; i < size; i++) {
        printf("%s\n", tab[i]);
	    }
}

int main()
{
    char tab[3][15] = {
        "not prepared !",
        "You",
        "are"
    };
    char tab2[5][5] = {
        "ab",
        "ba",
        "ca",
        "Da",
        "aE"
    };
    char *f[3] = {
        tab[0], tab[1], tab[2]
    };
    char *f2[5] = {
        tab2[0], tab2[1], tab2[2], tab2[3], tab2[4]
    };
    my_show_array(f, 3);
    my_show_array(f2, 5);
    return (0);
}
