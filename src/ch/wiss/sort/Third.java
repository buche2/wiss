package ch.wiss.sort;

import java.util.ArrayList;
import java.util.List;
import java.util.Random;

public class Third {

    public static void main(String... args) {

        /*int[] sorted = Quicksort.sort(new int[]{5,7,3,6,9,1,4},0,6);
        for(int value : sorted){
            System.out.println(value);
        }*/

        Person[] personArray = new Person[]{new Person("Hans",50),new Person("Enrico",35), new Person("Albi",80)};
        Person.setSortBy("age");
        for(Person p : Quicksort.<Person>sort(personArray,0,personArray.length-1)){
            System.out.println(p);
        }



/*
        int countElems = 10000000;
        int[] elems = new int[countElems];
        for (int i = 0; i < countElems; i++) {
            elems[i] = (new Random()).nextInt();
        }

        long before = System.currentTimeMillis();
        int[] sorted = Quicksort.sort(elems,0,countElems-1);
        //sorted = Bubblesort.sort(elems);
        long after = System.currentTimeMillis();

        System.out.println("Zeitdauer: " + (after - before));*/

    }

}
