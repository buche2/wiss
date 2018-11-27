package ch.wiss.exam;

import org.junit.Test;
import static org.junit.Assert.*;

public class RegexTest {

    @Test
    public void correct(){
        assertTrue(MatchDate.matcher("19.01.2018T10:30:15.000"));
    }

    @Test
    public void wrong(){
        assertFalse(MatchDate.matcher("19.01.18"));
    }

}
