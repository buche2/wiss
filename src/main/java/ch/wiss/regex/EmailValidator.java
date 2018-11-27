package ch.wiss.regex;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class EmailValidator {

    public static boolean isValid(String email){
        Pattern pattern = Pattern.compile("^([a-zA-Z0-9]((\\.|-|_)[a-zA-Z0-9])?){3,}@([a-zA-Z0-9]((\\.|-)[a-zA-Z0-9])?){3,}\\.[a-zA-Z]{2,}$");
        Matcher matcher = pattern.matcher(email);

        return matcher.find();
    }

}
