package ch.wiss.iterek;

import java.io.File;
import java.util.ArrayList;
import java.util.List;

public class Folder {

    public static List<File> listFiles(File file){
        List<File> files = new ArrayList<>();
        walk(file,files);
        return files;
    }



    public static void walk(File file, List<File> found){
        if(file.isDirectory()){
            for(File f : file.listFiles()){
                if(f.isDirectory())
                    walk(f,found);
                else
                    found.add(f);
            }
        }else {
            found.add(file);
        }
    }

}
