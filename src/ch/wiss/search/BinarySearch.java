package ch.wiss.search;

import java.util.List;

public class BinarySearch {

    public static <T extends Comparable> int search(T value, T[] container){
        return searchDAC(value, container, 0, container.length-1);
    }

    private static <T extends Comparable> int searchDAC(T value, T[] container, int left, int right){
        if(right < left)
            return -1;

        int middle = (left+right)/2;

        int find = container[middle].compareTo(value);

        if(find == 0){
            return middle;
        }else if(find < 0)
            return searchDAC(value, container, middle+1, right);
        else
            return searchDAC(value, container, left, middle-1);
    }

}
