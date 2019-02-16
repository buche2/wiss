package ch.web4b.myapplication.data;

import android.databinding.BaseObservable;
import android.databinding.Bindable;

// Klasse BR wird durch databinding generiert
import ch.web4b.myapplication.BR;

public class Service extends BaseObservable {
    private String name = "Buchs";
    private String firstname = "Enrico";

    // sorgt dafür, dass es bidirektional gebunden werden kann
    @Bindable
    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
        // beobachter werden über die veränderung des subjektes benachrichtigt
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
