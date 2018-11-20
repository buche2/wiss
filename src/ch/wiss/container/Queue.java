package ch.wiss.container;

public class Queue<T> implements Container<T> {

    private Object[] container;
    private int index = 0;

    public Queue() {
        this.container = new Object[5];
    }

    @Override
    public boolean push(T elem) throws Exception {
        if (this.container.length < index + 1)
            throw new Exception("Stack ist zu klein");
        this.container[index++] = elem;
        return true;
    }

    @Override
    public T pull() {
        T elem = (T)this.container[0];
        if(index > 0) {
            for (int i = 1; i < container.length; i++)
                container[i - 1] = container[i];
            index--;
        }
        return elem;
    }
}
