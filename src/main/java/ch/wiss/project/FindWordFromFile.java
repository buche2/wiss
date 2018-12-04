package ch.wiss.project;

import java.io.File;

public class FindWordFromFile {

    private String filepath;

    public FindWordFromFile(String filepath){
        this.filepath = filepath;
    }

    public int find(String word){
        FileReader fileReader = new FileReader(new File(filepath));

        String[] strings = new String[fileReader.getWords().size()];

        fileReader.getWords().toArray(strings);

        String[] sorted = Quicksort.<String>sort(strings);

        return BinarySearch.search(word, sorted);
    }

}
