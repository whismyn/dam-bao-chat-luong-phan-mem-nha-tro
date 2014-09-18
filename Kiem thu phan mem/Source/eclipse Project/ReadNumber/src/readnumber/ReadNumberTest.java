/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package readnumber;

import static junit.framework.Assert.assertEquals;
import junit.framework.TestCase;

/**
 *
 * @author Quach Hoang Phuc
 */
public class ReadNumberTest extends TestCase {

	public ReadNumberTest(String testName) {
		super(testName);
	}

	/**
	 * Test of tienxuly method, of class ReadNumber.
	 */
	public void testTienxuly() {
		System.out.println("Test hàm tienxuly");
		ReadNumber instance = new ReadNumber();
		assertEquals("1", instance.tienxuly("1"));
		assertEquals("1", instance.tienxuly(" 1"));
		assertEquals("123456789", instance.tienxuly("00123456789"));
		assertEquals("1", instance.tienxuly(" 001"));
		assertEquals("0", instance.tienxuly("0000"));
	}

	/**
	 * Test of check method, of class ReadNumber.
	 */
	public void testCheck() {
		System.out.println("Test hàm check");
		ReadNumber instance = new ReadNumber();
		assertEquals(true, instance.check("123456789"));
		assertEquals(false, instance.check("123.456789"));
		assertEquals(false, instance.check("1 234 567 809"));
		assertEquals(true, instance.check("0001"));
		assertEquals(false, instance.check("abc1234567890"));
		// TODO review the generated test code and remove the default call to
		// fail.
	}

	/**
	 * Test of docDaySo method, of class ReadNumber.
	 */
	public void testDocDaySo() {
		System.out.println("Test hàm docDaySo");
		ReadNumber instance = new ReadNumber();
		assertEquals("không", instance.docDaySo("000000"));
		assertEquals("một", instance.docDaySo("1"));
		assertEquals("một nghìn", instance.docDaySo("1000"));
		assertEquals("một triệu", instance.docDaySo("1000000"));
		assertEquals("một tỷ", instance.docDaySo("1000000000"));
		assertEquals("một nghìn tỷ", instance.docDaySo("1000000000000"));
		assertEquals("một triệu tỷ", instance.docDaySo("1000000000000000"));
		assertEquals("một trăm triệu tỷ không trăm linh một",
				instance.docDaySo("100000000000000001"));
		assertEquals(
				"một tỷ hai trăm ba mươi bốn triệu năm trăm sáu mươi bảy nghìn tám trăm chín mươi",
				instance.docDaySo("1234567890"));
		assertEquals("", instance.docDaySo("123.456789"));
		assertEquals("", instance.docDaySo("1 234 567 809"));
		assertEquals("", instance.docDaySo("abc1234567890"));
		// TODO review the generated test code and remove the default call to
		// fail.
	}

	@SuppressWarnings("empty-statement")
	public void testDoc3So() {
		System.out.println("Test hàm doc3so");
		ReadNumber instance = new ReadNumber();
		char[] a = { '0', '0', '0' };
		char[] b = { '1' };
		char[] c = { '1', '0' };
		char[] d = { '1', '0', '0' };
		char[] e = { '0', '0', '1' };
		char[] f = { '0', '0', '5' };
		char[] g = { '0', '1', '5' };
		char[] h = { '1', '1' };
		char[] i = { '0', '5', '0' };
		char[] k = { '9', '5', '1' };
		char[] j = { 'a', 'b', 'c' };
		assertEquals("không", instance.doc3So(a));
		assertEquals("một", instance.doc3So(b));
		assertEquals("mười", instance.doc3So(c));
		assertEquals("một trăm", instance.doc3So(d));
		assertEquals("không trăm linh một", instance.doc3So(e));
		assertEquals("không trăm linh năm", instance.doc3So(f));
		assertEquals("không trăm mười lăm", instance.doc3So(g));
		assertEquals("mười một", instance.doc3So(h));
		assertEquals("không trăm năm mươi", instance.doc3So(i));
		assertEquals("chín trăm năm mươi mốt", instance.doc3So(k));
		assertEquals("", instance.doc3So(j));
	}
}
