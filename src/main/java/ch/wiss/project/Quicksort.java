package ch.wiss.sort;


public class Quicksort {

    public static <T extends Comparable> T[] sort(T[] toSort){
        return sortDAC(toSort,0, toSort.length-1);
    }

    private static <T extends Comparable> T[] sortDAC(T[] toSort, int left, int right){
        if (left < right) {
            int pivotPosition = split(toSort, left, right);

            sortDAC(toSort, left, pivotPosition - 1);
            sortDAC(toSort, pivotPosition + 1, right);
        }

        return toSort;
    }

    private static <T extends Comparable> int split(T[] toSort, int left, int right) {
        T pivotValue = toSort[right];

        int i = (left - 1);

        for (int j = left; j <= right - 1; j++) {
            if (toSort[j].compareTo(pivotValue) < 0) {
                i++;
                T temp = toSort[i];
                toSort[i] = toSort[j];
                toSort[j] = temp;
            }
        }
        T temp = toSort[i + 1];
        toSort[i + 1] = toSort[right];
        toSort[right] = temp;

        return i + 1;
    }




    public static int[] sort(int[] toSort, int left, int right) {

        if (left < right) {
            int pivotPosition = split(toSort, left, right);

            sort(toSort, left, pivotPosition - 1);
            sort(toSort, pivotPosition + 1, right);
        }

        return toSort;
    }

    private static int split(int[] toSort, int left, int right) {
        int pivotValue = toSort[right];

        int i = (left - 1);

        for (int j = left; j <= right - 1; j++) {
            if (toSort[j] < pivotValue) {
                i++;
                int temp = toSort[i];
                toSort[i] = toSort[j];
                toSort[j] = temp;
            }
        }
        int temp = toSort[i + 1];
        toSort[i + 1] = toSort[right];
        toSort[right] = temp;

        return i + 1;
    }

}
