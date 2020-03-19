#include <unistd.h>

int main(int argc, char **argv) {
    char c;
    int count;

    if (argc > 1) {
        for (count = 0; argv[1][count] != '\0'; count++);

        for (int i = count - 1; i >= 0; i--) {
            c = argv[1][i];
            write(1, &c, 1);
            sleep(1);
        }
        c = '\n';
        write(1, &c, 1);
    }
    return 0;
}