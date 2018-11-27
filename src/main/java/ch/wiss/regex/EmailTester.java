package ch.wiss.regex;

import org.junit.Test;
import static org.junit.Assert.*;

public class EmailTester {

    @Test
    public void testEmail(){
        assertTrue(EmailValidator.isValid("buchs04@gmail.com"));
    }

    @Test
    public void testEmail2(){
        assertTrue(EmailValidator.isValid("buchs-enrico@gmail.com"));
    }

    @Test
    public void testEmail4(){
        assertTrue(EmailValidator.isValid("buchs-enrico@suter.samuel.ch"));
    }


    @Test
    public void testEmail3(){
        assertFalse(EmailValidator.isValid("........@gmail.com"));
    }


}
