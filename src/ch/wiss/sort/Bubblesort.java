package ch.wiss.sort;

public class Bubblesort {

    public static int counter = 0;

    public static int[] sort(int[] toSort){
        for(int i = 0; i < toSort.length; i++){
            for(int j = 0; j < toSort.length - i - 1; j++){
                if(toSort[j] > toSort[j+1]){
                    int temp = toSort[j];
                    toSort[j] = toSort[j+1];
                    toSort[j+1] = temp;
                }
                Bubblesort.counter++;
            }
        }
        return toSort;
    }

}
