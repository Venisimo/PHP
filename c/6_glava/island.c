#include <stdio.h>
#include <stdlib.h>
#include "island.h"

void display(island *start) {
    island *i = start;
    for (; i !=NULL; i = i->next){
        printf("Название: %s, открыто с %s до %s\n", i->name, i->opens, i->closes);
    }
}  
void release(island *start) {
    island *i = start;
    island *next = NULL;
    for (; i != NULL; i = next) {
        next = i->next;
        free(i->name);
        free(i);
    }
}
island* create(char *name) {
    island *i = malloc(sizeof(island));
    i->name = strdup(name);
    i->opens = "09:00";    
    i->closes = "17:00";
    i->next = NULL;
    return i;
}