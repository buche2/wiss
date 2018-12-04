package ch.wiss.project;

import java.io.File;

public class ProjectRunner {

    public static void main(String ... args){

        FindWordFromFile findWordFromFile = new FindWordFromFile("README.md");

        long timeBefore = System.currentTimeMillis();

        int found = findWordFromFile.find("Debugger");

        long timeAfter = System.currentTimeMillis();

        System.out.println(found + " in " + (timeAfter-timeBefore) + " ms");

    }

}
