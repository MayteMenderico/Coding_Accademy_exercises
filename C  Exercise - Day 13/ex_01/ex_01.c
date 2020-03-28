#include <unistd.h>

int main(int argc, char **argv) {
    char c;

    if (argc > 1) {
        for (int i = 0; argv[1][i] != '\0'; i++) {
            c = argv[1][i];
            write(1, &c, 1);
            sleep(1);
        }
        c = '\n';
        write(1, &c, 1);
    }
    return 0;
}