package ch.wiss.regex;

import org.junit.Test;
import static org.junit.Assert.*;

public class PhoneTester {

    @Test
    public void testLocalPhone(){
        assertTrue(PhoneValidator.isValid("0766743294"));
        assertTrue(PhoneValidator.isValid("076 674 32 94"));
        assertTrue(PhoneValidator.isValid("076 6743294"));
    }

    @Test
    public void testInternationalPhone(){
        assertTrue(PhoneValidator.isValid("+41766743294"));
        assertTrue(PhoneValidator.isValid("+41(0)766743294"));
        assertTrue(PhoneValidator.isValid("+41 (0) 766743294"));
        assertTrue(PhoneValidator.isValid("+41 76 674 32 94"));
    }

    @Test
    public void testWrongPhones(){
        assertFalse(PhoneValidator.isValid("+417667432949"));
        assertFalse(PhoneValidator.isValid("+417667a3294"));
        assertFalse(PhoneValidator.isValid("+41 76 67 43 29 49"));
        assertFalse(PhoneValidator.isValid("+41 ( 0 ) 766743294"));
    }

}
