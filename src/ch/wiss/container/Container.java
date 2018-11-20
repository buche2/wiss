package ch.wiss.container;

public interface Container<T> {

    boolean push(T elem) throws Exception;
    T pull();

}
