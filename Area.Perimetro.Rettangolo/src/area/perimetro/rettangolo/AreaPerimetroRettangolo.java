/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package area.perimetro.rettangolo;

import java.util.Scanner;
/**
 *
 * @author Studente
 */
public class AreaPerimetroRettangolo {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Scanner input=new Scanner(System.in);
        int B;
        int H;
        int A;
        int P;
        System.out.println("Immettere la base del rettangolo:");
        B=input.nextInt();
        System.out.println("Immettere l'altezza del rettangolo:");
        H=input.nextInt();
        P=H+H+B+B;
        A=B*H;
        System.out.println("PERIMETRO RETTANGOLO:"+P);
        System.out.println("AREA RETTANGOLO:"+A);
        // TODO code application logic here
    }
    
}