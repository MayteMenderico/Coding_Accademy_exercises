#include <unistd.h>

int main(int argc, char **argv) {
    char c;
    int count;
    int left, right;

    if (argc > 1) {
        for (count = 0; argv[1][count] != '\0'; count++);

        if (count % 2 == 0) {
            left = (count / 2) - 1;
            right = left + 1;
        } else {
            left = count / 2;
            right = left;
        }

        while (left >= 0) {
            for (int i = 0; i < count; i++) {
                if (i >= left && i <= right) {
                    sleep(1);
                    c = argv[1][i];
                    write(1, &c, 1);
                } else {
                    sleep(1);
                    c = ' ';
                    write(1, &c, 1);
                }
            }

            left--;
            right++;

            sleep(1);
            c = '\n';
            write(1, &c, 1);
        }       
    }
    return 0;
}