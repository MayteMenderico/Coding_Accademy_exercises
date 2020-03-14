#include <stdio.h>
#include <math.h>

/*Leia os quatro valores correspondentes aos eixos x e y de dois pontos quaisquer
 no plano, p1(x1,y1) e p2(x2,y2) e calcule a distância entre eles, mostrando 4 
 casas decimais após a vírgula, segundo a fórmula:

Distancia = sqrt((x2-x1)^2 + (y2-y1)^2)

Entrada
O arquivo de entrada contém duas linhas de dados. A primeira linha contém dois 
valores de ponto flutuante: x1 y1 e a segunda linha contém dois valores de ponto 
flutuante x2 y2.

Saída
Calcule e imprima o valor da distância segundo a fórmula fornecida, com 4 casas 
após o ponto decimal.
*/

int main()
{
    // Declaracao de variaveis
    double x1, y1;
    double x2, y2;
    double distancia;

    // Entrada
    
    scanf("%lf", &x1);
    scanf("%lf", &y1);
    scanf("%lf", &x2);
    scanf("%lf", &y2);



    // Processamento
    distancia = sqrt(pow((x2 - x1),2) + pow((y2 - y1),2));
    
    
    // Saida
    printf("%.4f\n", distancia);

    return 0;
}
