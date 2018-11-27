package ch.wiss.container;

public class Second {

    public static void main(String[] args) {

        try {
            Container<Integer> container = new Stack<Integer>();
            container.push(1);
            container.push(2);
            container.push(3);
            container.push(2);
            container.push(3);
            container.push(2);
            container.push(3);

            System.out.println(container.pull());

            container.push(4);

            System.out.println(container.pull());

            container.push(5);
            container.push(6);

            System.out.println(container.pull());
            System.out.println(container.pull());
            System.out.println(container.pull());
            System.out.println(container.pull());
            System.out.println(container.pull());
        }catch(Exception e){
            System.out.println(e.getLocalizedMessage());
        }
    }

}
