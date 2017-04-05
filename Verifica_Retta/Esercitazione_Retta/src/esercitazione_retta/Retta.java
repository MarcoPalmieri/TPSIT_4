/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package esercitazione_retta;

/**
 *
 * @author Palmieri Marco
 */
class Retta {
    private double a;
    private double b;
    private double c;
    
    public Retta (double x, double y, double z) {
    this.a=x;
    this.b=y;
    this.c=z;
    }
        public double getTipo () {
            if (this.b==0){
                return 1;
            } else {
            if (this.a==0){
                return 2;
            }
            else {
                return 3;
            }
            }
        }
        /* Non completo
        public double Stampa () {
            String text;

        } */
        
        
}
