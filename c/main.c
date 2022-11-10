#include <stdio.h>
int main(void) {
    int x, y, z, d;
    printf("Введите x: ");
    scanf("%d", &x);
    printf("Введите y: ");
    scanf("%d", &y);
    printf("Введите действие\n");
    printf("1 - сложение\n");
    printf("2 - вычитание\n");
    printf("3 - умножение\n");
    printf("4 - деление\n");
    printf("Действие: ");
    scanf("%d", &d);

    if (d == 1) {
        z = x + y;
        printf("%d + %d = %d\n", x,y,z);
    }
    else if (d == 2) {
        z = x - y;
        printf("%d - %d = %d\n", x,y,z);
    }
    else if (d == 3) {
        z = x * y;
        printf("%d * %d = %d\n", x,y,z);
    }
    else if (d == 4) {
        if (x  == 0 || y == 0) {
            printf("На 0 делить нельзя!\n");
        }
        else {
            float(z) = (float)x / y;
            printf("%d / %d = %.2f\n", x,y,z);
    }
    }
    else {
        printf("Неверное действие\n");
    }
    return 0;
}