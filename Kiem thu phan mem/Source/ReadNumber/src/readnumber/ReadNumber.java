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
        while( vtri<len && str.charAt(vtri) == '0') vtri++; // tìm vị trí có chữ số khác '0'
        if(vtri == len) //"000" -> "0"
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
    public String doc3So(char[] a){
        String str=""; //chuổi kết quả
        String space = "";
        for(int i = 0 ; i < a.length ; i ++){
            int num = a[i] - '0'; // chuyển ký tự a[i] sang số và lưu vào num
            //----------------------------n=0-----------------------------------
            if(num == 0){ 
                // kiểm tra các ký tự còn lại có toàn là số 0 không, lưu kết quả vào isZero
                // để tránh trường hợp: 100 đọc là: một trăm linh không
                boolean isZero = true;
                for(int j = i+1 ; j < a.length && isZero; j ++) if(a[j] != '0') isZero = false;
                // nếu còn chử số khác 0 phía sau thì đọc bình thường.
                // vd: 101: một trăm linh một, 100: một trăm
                if(!isZero){  
                    if(i%3 == 0)
                        str += space + strNum[num] + " " +strHang[a.length -1 - i % 3];
                    else if(i%3 == 1)// nếu là số '0' ở vị trí 2 thì đọc là "linh", vd: 101, '0' -> "linh"
                        str += space + strNum[12];
                }
            }
            //----------------------------n=1-----------------------------------
            else if(num == 1){
                if((a.length - i )%3 == 0) // nếu là hàng trăm
                    str += space +  strNum[num] + " " + strHang[a.length -1 - i % 3];
                else if((a.length - i)%3 == 2) // nếu là hàng chục -> "mười", vd: 210 (hai trăm mười), '1' -> "nười"
                    str += space + strHang[6];
                else if(i >= 1 && a[i-1] >= '2') // nếu là hàng đơn vị và hơn 2 chữ số và chữ số thứ hai >= 2 đọc là "mốt", vd: 21(hai mươi mốt), '1' -> "mốt"
                        str += space + strNum[10];
                else 
                    str += space + strNum[num]; //11(mười một), 201(hai trăm linh một) => '1' -> "một"
            }
            //----------------------------n=5-----------------------------------
            else if(num == 5){
                if((a.length - i )%3 == 1 && i>0 && a[i-1] >= '1') //neu la hang don vi va so hàng chuc >= 1 -> "lăm", vd:15(mười lăm)
                    str+= space + strNum[11]; 
                else // vd: 5(năm), 105(một trăm linh năm) => '5' -> "năm"
                    str += space + strNum[num]+ " " + strHang[a.length -1 - i % 3];
            }
            //----------------------------n!={0,1,5}-----------------------------------
            else // các trường hợp khác thì đọc theo quy tắc bình thường
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
