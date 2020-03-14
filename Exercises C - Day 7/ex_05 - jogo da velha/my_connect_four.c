#include <stdlib.h>
#include <stdio.h>
#include <unistd.h>

int gecko_read(char *str)
{
    return (read(0, str, 2));
}

void show_game(char **game_array)
{
    int counter_y;
    counter_y = 0;
    printf("| 1 | 2 | 3 | 4 | 5 | 6 | 7 |\n");
    printf("=============================\n");

    while (counter_y < 6)
    {
        printf("| %c | %c | %c | %c | %c | %c | %c |\n",
        game_array[counter_y][0], game_array[counter_y][1],
        game_array[counter_y][2], game_array[counter_y][3],
        game_array[counter_y][4], game_array[counter_y][5],
        game_array[counter_y][6]);
        counter_y++;
    }
    printf("\n");
}

int main() 
{
    char input;
    int convertedInput;
    int player = 1;
    char **game_array = (char *)malloc(6 * sizeof(char *));

    for(int i = 0; i < 6; i++) {
        game_array[i] = (char *)malloc(7 * sizeof(char));
        
        for(int j = 0; j < 7; j++) {
            game_array[i][j] = '-';
        }
    }

    while(1) 
    {
        // int lixo = gecko_read(&input);
        // convertedInput = atoi(&input);

        printf("Player #%d's turn : ", player);
        scanf("%d", &convertedInput);

        if(convertedInput > 0 && convertedInput < 8) {
            for(int i = 5; i >= 0; i--) {
                if (game_array[i][convertedInput - 1] == '-') {
                    if (player == 1) {
                        game_array[i][convertedInput - 1] = 'X';
                        player = 2;
                    } else {
                        game_array[i][convertedInput - 1] = 'O';
                        player = 1;
                    }
                    i = -1;
                }
            }

            show_game(game_array);
        } else {
            continue;
        }
    }
}
/*Write a software ‘my_connect_four’. This software must implement the connect four game. This is a two
player game. The goal is to align four identical symbols. Player #1 (P1) will play with ‘X’ and Player #2 (P2)
will play with ‘O’. An empty case is fill with ‘-’.
At each turn, you must dislay a game board with 6 row and 7 columns and ask with a prompt a player to
choose in which column he wants to play. An element will always be drop on the choosen column and fall
at the bottom of it. If an error occurs, you should ask the player to play again by displaying : “Player #{player
number}’s turn :”.
Take care, when you prompt “Player #1’s turn :”, the player should write his move on the same line.
If the game finish with a draw, you should display : “It’s a draw !” followed by a new line.
You must use the given function to read the user input :
The str parameter must be allocated
*/


