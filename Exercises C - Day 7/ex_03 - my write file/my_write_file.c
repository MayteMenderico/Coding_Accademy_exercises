#include <stdlib.h>
#include <unistd.h>
#include <fcntl.h>

int main(int argc, char **argv)
{
    int txt;
    if (argc < 3)
    {
        char *str = "Error.\n";
        write(1, str, 8);
    }
    else
    {
        txt = open(argv[1], O_WRONLY | O_CREAT);
        for (int i = 2; i < argc; i++)
        {
            for (int j = 0; argv[i][j] != '\0'; j++)
            {
                char c = argv[i][j];
                write(txt, &c, 1);
            }
            char d = '\n';
            write(txt, &d, 1);
        }
    }

    close(txt);
    return (0);
}

/*Write a software ‘my_write_file’, taking multiple strings in parameter. The first argument will be a file path.
You must open it in write mode and erase its content. Then you must write every other parameters of your
software in it, each followed by a newline. If the file does not exist, it must be created.
You must close the file at the end of the operation.
If an error occurs, display “Error.” followed by a newline on the standard output, and do not create the
file. If no line to write if given, then it is an error.
*/
