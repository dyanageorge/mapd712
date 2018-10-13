package com.example.dyanageorge.dyanageorge_mapd711_onlinepizza;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;

public class pizza extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pizza);

        getSupportActionBar().setDisplayHomeAsUpEnabled(true);
    }
}
