/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package readnumber;

import static junit.framework.Assert.assertEquals;
import junit.framework.TestCase;

/**
 *
 * @author Kota
 */
public class ReadNumberTest extends TestCase {
    
    public ReadNumberTest(String testName) {
        super(testName);
    }

    /**
     * Test of tienxuly method, of class ReadNumber.
     */
    public void testTienxuly() {
        System.out.println("tienxuly");
        ReadNumber instance = new ReadNumber();
        assertEquals("1", instance.tienxuly("1"));
        assertEquals("25", instance.tienxuly("0025"));
        assertEquals("367", instance.tienxuly("00367"));
    }

    /**
     * Test of check method, of class ReadNumber.
     */
    public void testCheck() {
        System.out.println("check");
        ReadNumber instance = new ReadNumber();
        assertEquals(true, instance.check("98745"));
        assertEquals(false, instance.check("456.569"));
        assertEquals(true, instance.check("99999"));
        assertEquals(false, instance.check("-3756"));
        assertEquals(false, instance.check("abcde"));
        // TODO review the generated test code and remove the default call to fail.
    }

    /**
     * Test of docDaySo method, of class ReadNumber.
     */
    public void testDocDaySo() {
        System.out.println("docDaySo");
        ReadNumber instance = new ReadNumber();
        assertEquals("năm triệu sáu trăm tám mươi chín nghìn không trăm hai mươi ba", instance.docDaySo("5689023"));
        assertEquals("sáu mươi bảy", instance.docDaySo("00067"));
        assertEquals("sáu mươi triệu không trăm linh năm", instance.docDaySo("60000005"));
        assertEquals("chín trăm triệu", instance.docDaySo("900000000"));
        assertEquals("", instance.docDaySo("abc8967"));
        // TODO review the generated test code and remove the default call to fail.
    }
    @SuppressWarnings("empty-statement")
    public void testDoc3So(){
        System.out.println("doc3so");
        ReadNumber instance = new ReadNumber();
        char[] a = {'3','7','8'};
        char[] b = {'1','0','3'};
        char[] c = {'0','3','0'};
        char[] d = {'1','0','0'};
        char[] e = {'0','0','7'};
        assertEquals("ba trăm bảy mươi tám", instance.doc3So(a));
        assertEquals("một trăm linh ba", instance.doc3So(b));
        assertEquals("không trăm ba mươi", instance.doc3So(c));
        assertEquals("một trăm", instance.doc3So(d));
        assertEquals("không trăm linh bảy", instance.doc3So(e));
    }


}
