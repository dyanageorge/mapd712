package com.example.dyanageorge.onlinepizza;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class sides extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_sides);

        /* use suport to set display home as */
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
    }
}