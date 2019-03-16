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
import android.text.Editable;
import android.text.TextWatcher;
import android.util.DisplayMetrics;
import android.util.Log;
import android.view.View;
import android.view.ViewGroup;
import android.view.ViewParent;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import java.util.Locale;

import ch.web4b.myapplication.data.DataHolder;
import ch.web4b.myapplication.data.Service;
import ch.web4b.myapplication.databinding.ActivityMainBinding;

public class MainActivity extends AppCompatActivity implements TextToSpeech.OnInitListener {

    private TextToSpeech textToSpeech;

    private DatePickerDialog datePickerDialog;

    MainActivity mainActivity;

    //Dieser Typ wird durch das Databinding selbst generiert => Build - Rebuild
    ActivityMainBinding binding;

    DataHolder holder;

    //Wiederverwendbarer ClickListener
    private View.OnClickListener onClickListener = new View.OnClickListener() {
        @Override
        public void onClick(View view) {
            Button b = (Button)view;
            Log.d("clicked", b.getText().toString());
        }
    };

    SharedPreferences sharedPref;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        // da der aktuelle Kontext in mehreren Subkontexten verwendet wird.
        // u.a. Listener Klassen ist dies eine günstige Art um das zu ermöglichen
        mainActivity = this;
        sharedPref = this.getPreferences(Context.MODE_PRIVATE);

        //diese Methode wird beim Databinding nicht mehr verwendet
        //setContentView(R.layout.activity_main);

        binding = DataBindingUtil.setContentView(this, R.layout.activity_main);

        // setService ist möglich, weil die variable im Layout service heisst.
        holder.service = new Service(sharedPref.getString("name", "NONAME"),sharedPref.getString("name", "NONAME"));

        binding.setService(DataHolder.service);



        Log.d("SharedPrefs", sharedPref.getString("name", "NONAME"));

        binding.editText.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence charSequence, int i, int i1, int i2) {

            }

            @Override
            public void onTextChanged(CharSequence charSequence, int i, int i1, int i2) {

            }

            @Override
            public void afterTextChanged(Editable editable) {
                SharedPreferences.Editor editor = sharedPref.edit();
                editor.putString("name", binding.editText.getText().toString());
                editor.commit();
                Log.d("SharedPrefs", sharedPref.getString("name", "NONAME"));
            }
        });

        //manuelles verwenden der componenten
        //binding.button.setText("Auto");
        //binding.editText.setText("Edito");




        //editor.putBoolean("mongodb", true);


        Log.d("SharedPrefs", sharedPref.getString("mykey", ""));
        Log.d("SharedPrefs", String.valueOf(sharedPref.getBoolean("mongodb", false)));

        Toast.makeText(this, "Hallo welt", Toast.LENGTH_LONG).show();

        Button button = findViewById(R.id.button2);
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // neue Aktivität starten Siehe Kommentar Zeile 58
                Intent intent = new Intent(mainActivity, Main2Activity.class);
                startActivity(intent);
                mainActivity.finish();
            }
        });

        // Dynamisches finden von Elementen in der View
//        ViewGroup v = findViewById(R.id.layout);
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
