package ch.wiss.sort;

public class Person implements Comparable<Person>{

    private String name;
    private int age;

    private static String sortBy = "name";

    public Person(String name, int age){
        this.name = name;
        this.age = age;
    }

    public static void setSortBy(String by){
        sortBy = by;
    }

    public int getAge(){
        return this.age;
    }

    public String getName(){
        return name;
    }

    public int compareTo(Person personToCompare){
        if(sortBy.equals("name"))
            return name.compareTo(personToCompare.getName());
        else if(sortBy.equals("age")) {
            if (age > personToCompare.getAge())
                return 1;
            else if (age < personToCompare.getAge())
                return -1;
            return 0;
        }else
            throw new UnsupportedOperationException();
    }

    public String toString(){
        return this.name;
    }

}
