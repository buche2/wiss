package ch.web4b.myapplication;

import android.databinding.DataBindingUtil;
import android.os.AsyncTask;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.JsonReader;
import android.util.Log;
import android.widget.TableLayout;
import android.widget.TableRow;
import android.widget.TextView;

import com.google.gson.Gson;

import org.w3c.dom.Text;

import java.io.BufferedReader;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;

import javax.net.ssl.HttpsURLConnection;

import ch.web4b.myapplication.data.DataHolder;
import ch.web4b.myapplication.databinding.ActivityMain2Binding;
import ch.web4b.myapplication.dto.github.Job;

public class Main2Activity extends AppCompatActivity {

    ActivityMain2Binding binding;
    TableLayout tableLayout;

    Main2Activity main2Activity;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        //setContentView(R.layout.activity_main2);
        binding = DataBindingUtil.setContentView(this, R.layout.activity_main2);
        binding.setService(DataHolder.service);
        main2Activity = this;

        tableLayout = findViewById(R.id.jobsTable);

        // because internet connection need time
        AsyncTask.execute(new Runnable() {
            @Override
            public void run() {
                // Create URL
                URL githubEndpoint = null;
                try {
                    //https://jobs.github.com/positions.json?description=java&location=Germany
                    githubEndpoint = new URL("https://jobs.github.com/positions.json?description=" + binding.getService().getFirstname() + "&location=Germany");
                    HttpsURLConnection myConnection =
                            (HttpsURLConnection) githubEndpoint.openConnection();
                    myConnection.setRequestProperty("User-Agent", "myexample-v0.1");
                    myConnection.setRequestProperty("Accept",
                            "application/vnd.github.v3+json");
                    myConnection.setRequestProperty("Contact-Me",
                            "hathibelagal@example.com");

                    if (myConnection.getResponseCode() == 200) {

                        BufferedReader br = new BufferedReader(new InputStreamReader(myConnection.getInputStream()));

                        final Job[] jobs;
                        Gson gson = new Gson();
                        jobs = gson.fromJson(br, Job[].class);

                        Log.d("jobs", "Anzahl Jobs: " + jobs.length);

                        runOnUiThread(new Runnable() {
                            @Override
                            public void run() {
                                for(Job job : jobs){
                                    TableRow tr = new TableRow(main2Activity);
                                    tr.setLayoutParams(new TableRow.LayoutParams(TableRow.LayoutParams.MATCH_PARENT, TableRow.LayoutParams.WRAP_CONTENT));
                                    TextView textView = new TextView(main2Activity);
                                    textView.setText(job.getCompany() + " " + job.getTitle());
                                    tr.addView(textView);
                                    tableLayout.addView(tr);
                                }
                            }
                        });


                    }
                    myConnection.disconnect();

                } catch (java.io.IOException e) {
                    e.printStackTrace();
                }

            }
        });




    }
}
