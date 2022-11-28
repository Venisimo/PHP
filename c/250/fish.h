#ifndef __FISH_C
#define __FISH_C

typedef struct exercise {
    const char *description;
    float duration;
} exercise;
typedef struct meal {
    const char *ingredients;
    float weight;
} meal;

typedef struct preferences {
    meal food;
    exercise exercise;
} preferences;

typedef struct fish {
    const char *name;
    const char *species;
    int teeth;
    int age;
    preferences care;
} fish;

void catalog(fish);
void label(fish);
#endif