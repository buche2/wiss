package ch.wiss.container;

public class Stack<T> implements Container<T> {

    private Object[] container;
    private int index = 0;

    public Stack() {
        this.container = new Object[5];
    }

    public boolean push(T elem) throws Exception {
        if (this.container.length < index + 1)
            throw new Exception("Stack ist zu klein");
        this.container[index++] = elem;
        return true;
    }

    public T pull() {
        if (index - 1 < 0)
            return null;
        return (T) this.container[--index];
    }

}
