#include <stdio.h>

void fortune_cookie(char msg[]) {
    printf("Soobshenie glasit: %s\n", msg);
    printf("dlina soobsheniya: %lu\n", sizeof(msg));
    printf("msg занимает %i байтов\n", sizeof(msg));
}

int main() {
    char quotes[] = "pechen'e vas polnit!\0";
    fortune_cookie(quotes);

    return 0;
}