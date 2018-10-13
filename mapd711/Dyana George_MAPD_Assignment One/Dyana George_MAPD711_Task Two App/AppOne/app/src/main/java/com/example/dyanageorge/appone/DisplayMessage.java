package com.example.dyanageorge.appone;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.TextView;
import android.support.v4.app.NavUtils;

public class DisplayMessage extends AppCompatActivity {

    TextView name, qual, profess, hobby, dream;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
       setContentView(R.layout.activity_display_message);

        name = (TextView) findViewById(R.id.name_tv);
        qual = (TextView) findViewById(R.id.qualif_tv);
        profess = (TextView) findViewById(R.id.profess_tv);
        hobby = (TextView) findViewById(R.id.hobby_tv);
        dream = (TextView) findViewById(R.id.dream_tv);

        name.setText(""+getIntent().getStringExtra("Full Name"));
        qual.setText(""+getIntent().getStringExtra("Qualification"));
        name.setText(""+getIntent().getStringExtra("Profession"));
        name.setText(""+getIntent().getStringExtra("Hobby"));
        name.setText(""+getIntent().getStringExtra("Dream"));

    }
}
