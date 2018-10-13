package com.example.dyanageorge.simpleresources;

import android.provider.MediaStore;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Toast;

public class ResourceActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_resource);

        //create event
        RadioGroup radioGroup=findViewById(R.id.radioGroup);
        radioGroup.setOnCheckedChangeListener(new RadioGroup.OnCheckedChangeListener() {
            @Override
            public void onCheckedChanged(RadioGroup group, int checkedId) {
                //define radio button
                RadioButton rb1=findViewById(R.id.radioButton1);
                RadioButton rb2=findViewById(R.id.radioButton2);

                if(rb1.isChecked()){
                    Toast.makeText(getApplicationContext(),
                            "Option 1 isselected",
                            Toast.LENGTH_LONG).show();
                }
                else if (rb2.isChecked()){
                    Toast.makeText(getApplicationContext(),
                            "Option 2 is selected",
                            Toast.LENGTH_LONG).show();
                }
            }
        });
    }
}
