#ifndef __ISLAND_H
#define __ISLAND_H

typedef struct island {
    char *name;
    char *opens;
    char *closes;
    struct island *next;
} island;

void display(island*);
island* create(char*);
island* release(island*);
#endif