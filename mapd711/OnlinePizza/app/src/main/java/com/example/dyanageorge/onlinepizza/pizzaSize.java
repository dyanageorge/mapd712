package com.example.dyanageorge.onlinepizza;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.RadioButton;
import android.widget.RadioGroup;

public class pizzaSize extends AppCompatActivity {

    final RadioGroup pizzaRadioGroup = (RadioGroup)findViewById(R.id.pizzaRadioGroup);

    pizzaRadioGroup.setOnCheckedChangeListener (new RadioGroup.OnCheckedChangeListener() {
        public void onCheckedChanged (
                RadioGroup pizzaRadioGroup, int checkedId) {
            if (checkedId != -1) {
                RadioButton rb = (RadioButton) findViewById(checkedId);
                if (rb != null) {
                    Intent pizza = new Intent(pizzaSize.this, toppings.class);
                }
            }
        }
    })
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pizza_size);
    }
}
