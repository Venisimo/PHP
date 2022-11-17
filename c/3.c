#include <stdio.h>
#include <string.h>

int str_count(char a[], char b[]) {
    int count = 0;
    char *t = a;
    while ((t = strstr(t, b)) != NULL) { 
        t = strstr(t, b);
        count++;
        t++;
}
return count;
}
int main() {
    int count = str_count("Hellol", "l");
    printf("%d\n", count);
    return 0;
}