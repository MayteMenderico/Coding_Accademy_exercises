/*Escreva um programa que leia três valores com ponto flutuante de dupla precisão: A, B e C. Em seguida, calcule e mostre:
a) a área do triângulo retângulo que tem A por base e C por altura.
b) a área do círculo de raio C. (pi = 3.14159)
c) a área do trapézio que tem A e B por bases e C por altura.
d) a área do quadrado que tem lado B.
e) a área do retângulo que tem lados A e B.
Entrada
O arquivo de entrada contém três valores com um dígito após o ponto decimal.

Saída
O arquivo de saída deverá conter 5 linhas de dados. Cada linha corresponde a uma das áreas descritas acima, 
sempre com mensagem correspondente e um espaço entre os dois pontos e o valor.
 O valor calculado deve ser apresentado com 3 dígitos após o ponto decimal.
 */

#include <stdio.h>
int main()
{

    double A;
    double B;
    double C;
    double pi;
    double areaTriangulo;
    double areaTrapezio;
    double areaCirculo;
    double areaQuadrado;
    double areaRetangulo;

    pi = 3.14159;

    scanf("%lf", &A);
    scanf("%lf", &B);
    scanf("%lf", &C);

    areaTriangulo = (A * C) / 2;
    areaCirculo = pi * (C * C);
    areaTrapezio = ((A + B) * C) / 2;
    areaQuadrado = B * B;
    areaRetangulo = A * B;

    printf("TRIANGULO: %.3f\n", areaTriangulo);
    printf("CIRCULO: %.3f\n", areaCirculo);
    printf("TRAPEZIO: %.3f\n", areaTrapezio);
    printf("QUADRADO: %.3f\n", areaQuadrado);
    printf("RETANGULO: %.3f\n", areaRetangulo);

    return (0);
}