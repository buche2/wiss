package ch.web4b.myapplication;

import android.app.Application;
import android.app.DatePickerDialog;
import android.content.Context;
import android.content.Intent;
import android.content.SharedPreferences;
import android.content.res.Configuration;
import android.content.res.Resources;
import android.databinding.DataBindingUtil;
import android.os.Build;
import android.preference.PreferenceManager;
import android.speech.tts.TextToSpeech;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.DisplayMetrics;
import android.util.Log;
import android.view.View;
import android.view.ViewGroup;
import android.view.ViewParent;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.TextView;

import java.util.Locale;

import ch.web4b.myapplication.data.DataHolder;
import ch.web4b.myapplication.data.Service;
import ch.web4b.myapplication.databinding.ActivityMainBinding;

public class MainActivity extends AppCompatActivity implements TextToSpeech.OnInitListener {

    private TextToSpeech textToSpeech;

    private DatePickerDialog datePickerDialog;

    MainActivity mainActivity;

    ActivityMainBinding binding;


    private View.OnClickListener onClickListener = new View.OnClickListener() {
        @Override
        public void onClick(View view) {
            Button b = (Button)view;
            Log.d("clicked", b.getText().toString());
        }
    };

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        mainActivity = this;

        //setContentView(R.layout.activity_main);

        binding = DataBindingUtil.setContentView(this, R.layout.activity_main);


        binding.setService(DataHolder.service);

        //binding.button.setText("Auto");
        //binding.editText.setText("Edito");



//        setContentView(R.layout.layout2);

        ViewGroup v = findViewById(R.id.layout);

        Button button = findViewById(R.id.button2);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(mainActivity, Main2Activity.class);
                startActivity(intent);
            }
        });

//        for (int i = 0 ; i < v.getChildCount(); i++){
//            View view = v.getChildAt(i);
//            if(view instanceof Button) {
//                Button button = (Button)view;
//                button.setOnClickListener(onClickListener);
//                //Log.d("children", button.getContentDescription().toString());
//                Intent intent = new Intent(this, Main2Activity.class);
//                startActivity(intent);
//            }
//        }

/*
        Button arbeit = findViewById(R.id.arbeiten);
        Button work = findViewById(R.id.material);
        Button next = findViewById(R.id.next);
        work.setOnClickListener(onClickListener);
        next.setOnClickListener(onClickListener);

        arbeit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                //setContentView(R.layout.activity_main);
                Intent intent = new Intent(mainActivity, Main2Activity.class);
                startActivity(intent);
            }
        });

//        textToSpeech = new TextToSpeech(this,this);
//        //textToSpeech.setLanguage(Locale.GERMAN);
//
//        Button button = findViewById(R.id.button);
//
//        button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View view) {
//                speak();
//            }
//        });
        datePickerDialog = new DatePickerDialog(findViewById(R.id.layout).getContext(), 0, new DatePickerDialog.OnDateSetListener() {
            @Override
            public void onDateSet(DatePicker datePicker, int i, int i1, int i2) {
                EditText text = findViewById(R.id.date);
                text.setText(datePicker.getDayOfMonth()+"."+datePicker.getMonth()+"."+datePicker.getYear());
            }
        }, 2019, 02, 16);

        EditText date = findViewById(R.id.date);
        date.setOnFocusChangeListener(new View.OnFocusChangeListener() {
            @Override
            public void onFocusChange(View view, boolean b) {
                if(b){
                    datePickerDialog.show();
                }else
                    datePickerDialog.hide();
            }
        });

        */

    }

    public void speak(){
        EditText textView = findViewById(R.id.editText);
        textToSpeech.setLanguage(Locale.GERMAN);
        textToSpeech.speak(textView.getText() + "", TextToSpeech.QUEUE_FLUSH, null, "");
        textView.setText("");
    }

    @Override
    public void onInit(int status){
        //textToSpeech.setLanguage(Locale.GERMAN);
        //textToSpeech.speak("Hallo UIFZ-725", TextToSpeech.QUEUE_FLUSH, null, "");
    }


}
