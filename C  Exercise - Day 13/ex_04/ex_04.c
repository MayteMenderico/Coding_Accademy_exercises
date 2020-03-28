#include <unistd.h>

int main(int argc, char **argv) {
    char c;
    int count;

    if (argc > 1) {
        for (count = 0; argv[1][count] != '\0'; count++);

        for (int i = 0; i < count; i++) {
            c = argv[1][i];
            write(1, &c, 1);
            sleep(1);
        }
        sleep(1);
        c = '\n';
        write(1, &c, 1);
        

        for (int i = 1; i < count; i++) {
            for (int j = 0; j < i; j++) {
                sleep(1);
                c = ' ';
                write(1, &c, 1);
            }

            for (int j = i; j < count; j++) {
                sleep(1);
                c = argv[1][j];
                write(1, &c, 1);
            }
            sleep(1);
            c = '\n';
            write(1, &c, 1);
        }
        c = '\n';
        write(1, &c, 1);
    }
    return 0;
}