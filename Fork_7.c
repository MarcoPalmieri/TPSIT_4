/********************************
 Palmieri Marco         4°INA
 data: 23/11/2016

 Generatore di processi con dato numero
********************************/

#include<stdio.h>
#include<stdlib.h>

main(){
    int n;
    int i;
    int pid;
    int status;

    do{
    printf("quanti processi vuole generare?:\n");
    printf("(massimo 4)\n");
    scanf("%d",&n);
    }while(n<1||n>4);

    printf("\nSono il processo con pid: %d\n",getpid());
    printf("Mio padre è: %d\n",getppid());

    for(i=0;i<n;i++){
        pid=fork();
        if(pid==0){
        //sleep(1); questo linea rende orfani i processi che verranno
        //adottati da INIT con pid pari ad "1"
        printf("\nSono il processo con pid: %d\n",getpid());
        printf("Mio padre è: %d\n",getppid());
        }
        }

    exit(0);
}
