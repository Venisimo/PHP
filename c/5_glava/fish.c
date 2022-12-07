#include <stdio.h>
#include <fish.h>

void catalog(fish f) {
    printf("%s - это %s с %d зубами, ему %d лет\n",
        f.name, f.species, f.teeth, f.age);
}

void label(struct fish a) {
    printf("Кличка:%s\nРазновидность:%s\n%d года %i зубов\n", a.name, a.species, a.teeth, a.age);
    printf("Давать %2.2f кг %s и разрешать %s на протяжении %2.2f часов\n", a.care.food.weight, a.care.food.ingredients, a.care.exercise.description, a.care.exercise.duration);
} 