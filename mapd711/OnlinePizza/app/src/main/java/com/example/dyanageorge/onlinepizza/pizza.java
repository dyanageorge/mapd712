package com.example.dyanageorge.onlinepizza;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.RadioButton;
import android.widget.RadioGroup;

public class pizza extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pizza);

        /* use suport to set display home as */
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
    }
}
