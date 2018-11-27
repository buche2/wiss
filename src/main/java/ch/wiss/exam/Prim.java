package ch.wiss.exam;

public class Prim {

    public boolean isPrim(int n){

        int t = 0;
        int i = 1;
        while(i <= n){
            if(n % i == 0){
                t++;
            }
            i++;
        }
        if(t==2)
            return true;
        return false;
    }

}
