
package finestre1;

import java.util.Scanner;

public class Finestre1 {

    public static void main(String[] args) {
    Finestra f;
    int n,i;
    Scanner input=new Scanner(System.in);
    do{
        System.out.println("Inserire quante finestre si vuole generare:");
        n=input.nextInt();
    }while(n<1||n>4);
    for(i=0;i<n;i++){
        f = new Finestra ();
        f.setVisible(true);
        f.testo.setText("Sono la finestra "+(i+1));
    }
    }
    
}
