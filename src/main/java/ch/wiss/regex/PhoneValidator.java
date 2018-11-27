package ch.wiss.regex;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class PhoneValidator {

    public static boolean isValid(String phone){
        Pattern pattern = Pattern.compile("^([0-9]{3}|\\+[0-9]{2}[ ]?([ ]?\\([0-9]\\))?[ ]?[0-9]{2})[ ]?[0-9]{3}([ ]?[0-9]{2}){2}$");

        Matcher matcher = pattern.matcher(phone);

        return matcher.find();
    }

}
