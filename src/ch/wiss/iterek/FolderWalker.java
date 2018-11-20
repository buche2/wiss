package ch.wiss.iterek;

import java.io.File;
import java.util.List;

public class FolderWalker {

    public static void main(String ... args){

        List<File> files = Folder.listFiles(new File("/home/ebuchs/Dokumente"));

        for(File f : files){
            System.out.print(f.getName());
            System.out.println();
        }

    }

}
