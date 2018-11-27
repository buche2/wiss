package ch.wiss.regex;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class PhoneValidator {

    public static boolean isValid(String phone){                    // +41 76 674 32949
        Pattern pattern = Pattern.compile("^(([0-9]{3}[ ]?[0-9]{3})|(\\+[0-9]{2}[ ]?(\\([0-9]\\))?[ ]?[0-9]{2}[ ]?[0-9]{3}))(([ ]?[0-9]){2}){2}$");
        Matcher matcher = pattern.matcher(phone);

        return matcher.find();
    }

}
