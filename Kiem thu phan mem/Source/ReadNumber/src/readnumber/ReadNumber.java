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
    
    // xóa các ký tự space và ký tự '0' thừa.   vd: 00010 -> 10
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
    // kt chuổi str có chứa các ký tự khác 0->9 không. TRUE: hợp lệ, FALSE: không hợp lệ
    public boolean check(String str){
        int len = str.length();
        for(int i = 0 ; i < len ; i ++)
            if(str.charAt(i)>'9' || str.charAt(i)<'0') 
                return false;
        return true;
    }
    
    // hàm đọc 3 số (vẫn đọc ký tự 0 thừa).vd: 001 -> không trăm linh một.
    private String doc3So(char[] a){
        String str=""; //chuổi kết quả
        String space = "";
        for(int i = 0 ; i < a.length ; i ++){
            int num = a[i] - '0'; // chuyển ký tự a[i] sang số và lưu vào num
            if(num == 0){ 
                // kiểm tra các ký tự còn lại có toàn là số 0 không, lưu kết quả vào isZero
                // để tránh trường hợp: 100 đọc là: một trăm linh không
                boolean isZero = true;
                for(int j = i+1 ; j < a.length && isZero; j ++) if(a[j] != '0') isZero = false;
                // nếu còn chử số khác 0 phía sau thì đọc bình thường.
                // 
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
    
    // hàm đọc một dãy số bất kỳ, nếu không đọc được thì trả về chuổi rổng.
    public String docDaySo(String n){
        
        n= tienxuly(n);             //xóa các ký tự space và '0' thừa
        
        if(!check(n))               //nếu không hợp lệ thì return chuổi rổng
            return "";
        if(n.equals("0"))           //nếu n == 0 thì return "Không"
            return strNum[0];
        
        String str = "",tmp="";     //str là chuổi chứa kết quả
        int len = n.length(), vtri=0;
        int group = (len +2)/3,delta = 0;// group là số lượng nhóm 3 chử số
        char space;     //space là ký tự khoảng trắng
        
        
        // đọc từng nhóm chử số từ phải sang trái, dùng hàm doc3so để đọc 3 chử số này.
        // tiếp tục như thế cho đến hết chuổi
        //12345678 -> có 3 nhóm là 12.345.678
        for(int i = 0 ; i < len ; i ++){
            tmp += n.charAt(i);
            if(((len-i-1)%3 == 0  ) ){          //khi đọc đươc 1 nhóm ký tự
                if((len-i)/9 > 0) delta = 1;    // nếu chử số >= hàng tỷ thì delta = 1 ngược lai delta = 0
                else delta = 0;
                if(Integer.parseInt(tmp)!=0)    // nếu giá trị tmp khác 0 thì dung hàm doc3so để dọc
                    str+= " " + doc3So(tmp.toCharArray())+ " " + strGroup[(group-1 +delta)%4 ];
                if((len-i -1)%9 == 0 && i != len-1) // nếu đọc xong hàng tỷ thì thêm chuổi "tỷ" vào
                    str += " " + strGroup[3];   
                group--;
                tmp="";
                if(group == 0) group=4; 
            }
        }
        
        return str.replaceAll("  ", " ").trim();//return chuổi kêt quả sau khi xóa ký tự space thừa.
    }
    
    public static void main(String[] args) {
        // TODO code application logic here
        ReadNumber r = new ReadNumber();
        String s = "10";
       // System.out.println(r.doc3So(s.toCharArray()));
        System.out.println(r.docDaySo(s));
        
    }
    
}
