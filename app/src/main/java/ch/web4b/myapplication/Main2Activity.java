package ch.web4b.myapplication;

import android.databinding.DataBindingUtil;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

import ch.web4b.myapplication.data.DataHolder;
import ch.web4b.myapplication.databinding.ActivityMain2Binding;

public class Main2Activity extends AppCompatActivity {

    ActivityMain2Binding binding;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        //setContentView(R.layout.activity_main2);
        binding = DataBindingUtil.setContentView(this, R.layout.activity_main2);
        binding.setService(DataHolder.service);
    }
}
