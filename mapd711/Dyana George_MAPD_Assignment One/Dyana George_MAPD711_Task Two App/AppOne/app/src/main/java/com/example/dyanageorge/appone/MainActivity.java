package com.example.dyanageorge.appone;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.app.Activity;
import android.view.Menu;

public class MainActivity extends AppCompatActivity {

    EditText nameTxt, qualTxt, professTxt, hobbyTxt, dreamTxt;
    Button btn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    //store edittext by id and store into txt
    nameTxt = (EditText) findViewById(R.id.et_name);
    qualTxt = (EditText) findViewById(R.id.et_qualif);
    professTxt = (EditText) findViewById(R.id.et_profession);
    hobbyTxt = (EditText) findViewById(R.id.et_hobby);
    dreamTxt = (EditText) findViewById(R.id.et_dream);

    //declare button
    btn = (Button) findViewById(R.id.btn_send);

    btn.setOnClickListener(new View.OnClickListener() {
        @Override
        public void onClick(View v) {

            String nameText = nameTxt.getText().toString();
            Intent intent = new Intent(MainActivity.this, DisplayMessage.class);
            intent.putExtra("Full Name", nameTxt);
            intent.putExtra("Qualification", qualTxt);
            intent.putExtra("Profession", professTxt);
            intent.putExtra("Hobby", hobbyTxt);
            intent.putExtra("Dream", dreamTxt);
            startActivity(intent);


        }
    });

}
