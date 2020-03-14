#include <fcntl.h>
#include <unistd.h>

int main(int argc, char **argv)
{
    int txt;
    if (argc < 2)
    {
        char *str = "Error.\n";
        write(1, str, 8);
    }
    else
    {
        txt = open(argv[1], O_RDONLY);
        char c = ' ';
        while (read(txt, &c, 1) > 0)
        {
            
            write(1, &c, 1);
        }
    }

    close(txt);
    return (0);
}

/*Write a software ‘my_read_file’, taking a string of char in parameter. Your software will be given a file name
in parameter. You must open the file in read mode and print its content. If an error occurs, display “Error.”
followed by a newline on the standard output.
You must close the file at the end of the operation.
*/
