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
public class ReadNumber {

    private static final String[] strNum = {"không","một","hai","ba","bốn","năm","sáu","bảy","tám","chín","mốt","lăm","linh"}; 
    private static final String[] strHang = {"","mươi","trăm","nghìn","triệu","tỷ","mười"};
    private static final String[] strGroup={"","nghìn","triệu","tỷ"};
    
    public String tienxuly(String str){
        int vtri = 0, len = str.length();
        str = str.trim();
        while( vtri<len && str.charAt(vtri) == '0') vtri++;
        if(vtri == len)
            return "0";
        if(vtri>0)
            str = str.substring(vtri, str.length());
        return str;
    }
    public boolean check(String str){
        int len = str.length();
        for(int i = 0 ; i < len ; i ++)
            if(str.charAt(i)>'9' || str.charAt(i)<'0') 
                return false;
        return true;
    }
    
    private String doc3So(char[] a){
        String str="";
        String space = "";
        for(int i = 0 ; i < a.length ; i ++){
            int num = a[i] - '0';
            if(num == 0){
                boolean isZero = true;
                for(int j = i+1 ; j < a.length && isZero; j ++) if(a[j] != '0') isZero = false;
                if(!isZero){
                    if(i%3 == 0)
                        str += space + strNum[num] + " " +strHang[a.length -1 - i % 3];
                    else if(i%3 == 1)
                        str += space + strNum[12];
                }
            }
            else if(num == 1){
                if((a.length - i )%3 == 0) // neu la hang tram
                    str += space +  strNum[num] + " " + strHang[a.length -1 - i % 3];
                else if((a.length - i)%3 == 2) // neu la hang chuc
                    str += space + strHang[6];
                else if(i >= 1 && a[i-1] >= '2') // neu la hang don vi va hon 2 chu so va chu so thu 2 >= 2
                        str += space + strNum[10];
                else 
                    str += space + strNum[num];
            }
            else if(num == 5){
                if((a.length - i )%3 == 1 && i>0 && a[i-1] >= '1') //neu la hang don vi va so hàng chuc >= 1
                    str+= space + strNum[11];
                else
                    str += space + strNum[num]+ " " + strHang[a.length -1 - i % 3];
            }
            else
                str += space + strNum[num] + " " + strHang[a.length -1 - i % 3];
            space = " ";
        }
        
        return str.trim();
    }
    
    public String docDaySo(String n){
        
        n= tienxuly(n);
        
        if(!check(n))
            return "";
        if(n.equals("0"))
            return strNum[0];
        
        String str = "",tmp="";
        int len = n.length(), vtri=0;
        int group = (len +2)/3,delta = 0;
        char space;
        
        for(int i = 0 ; i < len ; i ++){
            tmp += n.charAt(i);
            if(((len-i-1)%3 == 0  ) ){
                if((len-i)/9 > 0) delta = 1;
                else delta = 0;
                if(Integer.parseInt(tmp)!=0)
                    str+= " " + doc3So(tmp.toCharArray())+ " " + strGroup[(group-1 +delta)%4 ];
                if((len-i -1)%9 == 0 && i != len-1)
                    str += " " + strGroup[3];
                group--;
                tmp="";
                if(group == 0) group=4; 
            }
        }
        
        return str.replaceAll("  ", " ").trim();
    }
    
    public static void main(String[] args) {
        // TODO code application logic here
        ReadNumber r = new ReadNumber();
        String s = "10";
       // System.out.println(r.doc3So(s.toCharArray()));
        System.out.println(r.docDaySo(s));
        
    }
    
}
