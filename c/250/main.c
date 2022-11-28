#include <stdio.h>
#include "fish.h"

int main(){
    fish snappy = {"Зубастик", "пиранья", 69, 4, {{"Мясо",0.2}, {"купаться", 7.5}}};
    label(snappy);
    return 0;
} 
