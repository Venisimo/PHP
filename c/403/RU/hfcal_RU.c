#include <stdio.h>
#include "hfcal.h"

void display_calories(float weight, float distance, float coef) {
	printf("Вес: %3.2f кг\n", weight);
	printf("Расстояние: %3.2f киллометра\n", distance);
	printf("Сожжено калорий: %4.2f кал\n", coef*weight*distance);
}