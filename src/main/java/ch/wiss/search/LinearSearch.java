package ch.wiss.search;

import java.util.List;

public class LinearSearch {

    public static <T extends Comparable> int search(T value, T[] container){
        int position = 0;
        for(T o : container){
            if(o.equals(value)){
                return position;
            }
            position++;
        }
        return -1;
    }

}
