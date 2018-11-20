package ch.wiss.iterek;

public class Iterek {

    public static void main(String ... args){
        System.out.println("Fibonacci Berechnung");

        System.out.println(Fibonacci.iterativ(5));
        System.out.println(Fibonacci.rekursiv(5));



        System.out.println("Fakultät Berechnung");
        long wert = 44;

        long before = System.currentTimeMillis();
        System.out.println(Faculty.iterativ(wert));
        System.out.println(System.currentTimeMillis()-before);
        before = System.currentTimeMillis();
        System.out.println(Faculty.rekursiv(wert));
        System.out.println(System.currentTimeMillis()-before);

    }

}
