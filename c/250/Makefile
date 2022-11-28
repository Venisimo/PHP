main: fish.o main.o
	gcc fish.o main.o -o main
encrypt.o: fish.c fish.h
	gcc -c fish.c
main.o: main.c fish.h
	gcc -c main.c