package ch.wiss.iterek;

public class Fibonacci {

    public static int iterativ(int generation){
        int population = 1;
        int populationPrev = 1;
        for(int i = 1; i <= generation; i++){
            int prev = population;
            population += populationPrev;
            populationPrev = prev;
        }
        return population;
    }

    public static int rekursiv(int generation){
        if(generation < 1)
            return 1;
        return rekursiv(generation-1)+rekursiv(generation-2);
    }

}
