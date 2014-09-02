/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package readnumber;

/**
 *
 * @author Admin
 */
public class Number {
    String strNumber;
    
    public Number() {
    }
    
    public Number(int n) {
        setNumber(n);
    }
    
    public boolean setNumber(int n){
        if(n<0) 
            return false;
       Integer num = new Integer(n);
        
        return true;
    }
    
    public static void main(String[] args) {
        Integer num = new Integer(1000000000);
        System.out.println(num.toString());
    }
}
