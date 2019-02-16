package ch.web4b.myapplication.data;

import android.databinding.BaseObservable;
import android.databinding.Bindable;

import ch.web4b.myapplication.BR;

public class Service extends BaseObservable {
    private String name = "Buchs";
    private String firstname = "Enrico";

    @Bindable
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
        notifyPropertyChanged(BR.name);
    }

    @Bindable
    public String getFirstname() {
        return firstname;
    }

    public void setFirstname(String firstname) {
        this.firstname = firstname;
        notifyPropertyChanged(BR.firstname);
    }
}
