package ch.wiss.search;

import ch.wiss.sort.Quicksort;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;

public class Search {

    public static void main(String ... args){
        int countValues = 9999999;
        Integer[] container = new Integer[countValues];

        for(int i = 0 ; i < countValues; i++){
            container[i] = (new Random()).nextInt(countValues);
        }


        long before = System.currentTimeMillis();

        System.out.println(LinearSearch.<Integer>search(new Integer(3),container));
        System.out.println(LinearSearch.<Integer>search(new Integer(64),container));

        System.out.println(System.currentTimeMillis()-before);

        container = Quicksort.<Integer>sort(container);

        before = System.currentTimeMillis();

        System.out.println(BinarySearch.<Integer>search(new Integer(3),container));
        System.out.println(BinarySearch.<Integer>search(new Integer(64),container));

        System.out.println(System.currentTimeMillis()-before);


    }

}
