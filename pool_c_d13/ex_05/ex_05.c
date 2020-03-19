#include <unistd.h>

int main(int argc, char **argv) {
    char c;
    int count;
    int left, right;

    if (argc > 1) {
        for (count = 0; argv[1][count] != '\0'; count++);

        left = -1;
        right = count;       

        while (left < right - 1) {
            for (int j = 0; j < count; j++) {
                if(j <= left || j >= right) {
                    sleep(1);
                    c = ' ';
                    write(1, &c, 1);
                } else {
                    sleep(1);
                    c = argv[1][j];
                    write(1, &c, 1);
                }              
            }
            left++;
            right--;
            sleep(1);
            c = '\n';
            write(1, &c, 1);
        }
        c = '\n';
        write(1, &c, 1);
    }
    return 0;
}