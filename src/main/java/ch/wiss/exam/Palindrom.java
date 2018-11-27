package ch.wiss.exam;

public class Palindrom {

    public boolean isPalindrom(String s){
        char[] chars = s.toCharArray();
        for(int i = 0; i < chars.length/2; i++){
            if(chars[i] != chars[chars.length-1-i]){
                return false;
            }
        }
        return false;
    }

}
