/*Leia quatro valores inteiros A, B, C e D. A seguir, calcule e mostre a diferença do produto de A e B pelo produto de C e D segundo a fórmula: DIFERENCA
 = (A * B - C * D).

Entrada
O arquivo de entrada contém 4 valores inteiros.

Saída
Imprima a mensagem DIFERENCA com todas as letras maiúsculas, conforme exemplo abaixo, com um espaço em branco antes e depois da igualdade.
*/
#include <stdio.h>

int main()
{
    //declaracao de variaveis
    int A;
    int B;
    int C;
    int D;
    int DIFERENCA;
    //entrada
    scanf("%d", &A);
    scanf("%d", &B);
    scanf("%d", &C);
    scanf("%d", &D);
    //processamento
    DIFERENCA = (A * B - C * D);
    //saída
    printf("DIFERENCA = %d\n", DIFERENCA);

    return (0);

}