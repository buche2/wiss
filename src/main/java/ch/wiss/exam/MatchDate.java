package ch.wiss.exam;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class MatchDate {

    public static boolean matcher(String date){
        Pattern pattern = Pattern.compile("([0-9]{2}\\.){2}[0-9]{4}T([0-9]{2}\\:){2}[0-9]{2}\\.[0-9]{3}");
        Matcher matcher = pattern.matcher(date);
        return matcher.matches();
    }

}
