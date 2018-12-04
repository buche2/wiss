package ch.wiss.project;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.HashSet;
import java.util.Scanner;
import java.util.Set;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class FileReader {

    private Set<String> words = new HashSet<String>();
    private File fileToRead;

    public FileReader(File fileToRead) {
        this.fileToRead = fileToRead;
        readWords();
    }

    private void readWords(){
        Pattern pattern = Pattern.compile("(\\w+)");

        try {
            Scanner scanner = new Scanner(fileToRead);

            while(scanner.hasNextLine()){
                Matcher matcher = pattern.matcher(scanner.nextLine());
                while(matcher.find()){
                    words.add(matcher.group(0));
                }
            }

        } catch (FileNotFoundException e) {
            e.printStackTrace();
        }
    }


    public Set<String> getWords() {
        return words;
    }

}
