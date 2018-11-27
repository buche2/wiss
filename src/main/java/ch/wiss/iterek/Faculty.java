package ch.wiss.iterek;

public class Faculty {

    public static long iterativ(long wert){
        long result = 1;
        for(long i = wert; i > 1 ; i--){
            result *= i;
        }
        return result;
    }

    public static long rekursiv(long wert){
        if(wert < 2)
            return 1;

        return wert*rekursiv(wert-1);
    }

}
