/*Neste problema, deve-se ler o código de uma peça 1, o número de peças 1, o valor unitário de cada peça 1, o código de uma peça 2,
 o número de peças 2 e o valor unitário de cada peça 2.
 Após, calcule e mostre o valor a ser pago.

Entrada
O arquivo de entrada contém duas linhas de dados. Em cada linha haverá 3 valores, respectivamente dois inteiros e um valor
 com 2 casas decimais.

Saída
A saída deverá ser uma mensagem conforme o exemplo fornecido abaixo, lembrando de deixar um espaço após os dois pontos
 e um espaço após o "R$". O valor deverá ser apresentado com 2 casas após o ponto.
 */

#include <stdio.h>
int main()
{
    //declaracao variaveis
    int codigo1;
    int numero1;
    float valor1;
    int codigo2;
    int numero2;
    float valor2;
    float valorTotal;
    //entrada
    scanf("%d", &codigo1);
    scanf("%d", &numero1);
    scanf("%f", &valor1);
    scanf("%d", &codigo2);
    scanf("%d", &numero2);
    scanf("%f", &valor2);
    //processamento
    valorTotal = (numero1 * valor1) + (numero2 * valor2);
    //saída
    printf("VALOR A PAGAR: R$ %.2f\n", valorTotal);

    return (0);
}