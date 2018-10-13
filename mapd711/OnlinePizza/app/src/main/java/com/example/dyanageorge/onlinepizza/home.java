package com.example.dyanageorge.onlinepizza;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;

public class home extends AppCompatActivity {

    //create vars
    public Button btn_cart;
    public Button btn_menu;
    public Button btn_coupon;
    public Button btn_checkOut;

    //create method for menu button
    public void menu() {
        btn_menu = (Button)findViewById(R.id.btn_menu);
        //wire button
        btn_menu.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //tell iprogra what to do
                Intent pickup = new Intent(home.this, home.class);
                startActivity(pickup);
            }
        });
    }

    //create method for coupon button
    public void coupon() {
        btn_coupon = (Button)findViewById(R.id.btn_coupon);
        //wire button
        btn_coupon.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //tell iprogra what to do
                Intent coupon = new Intent(home.this, coupon.class);
                startActivity(coupon);
            }
        });
    }

    //create method for pick up button
    public void checkOut(){
        btn_checkOut = (Button)findViewById(R.id.btn_checkOut);
        //wire the button
        btn_checkOut.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //tell the program what too do
                Intent checkout = new Intent(home.this, checkOut.class);
                startActivity(checkout);
            }
        });
    }

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

    }

    /*menu inflator*/
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.main_menu, menu);

        return true;
    }

    /*switch statement to switch between the menu options*/
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        switch (item.getItemId()) {
            case R.id.pizza:
                Intent intent1 = new Intent(this, pizza.class);
                this.startActivity(intent1);
                return true;
            case R.id.pasta:
                Intent intent2 = new Intent(this, pasta.class);
                this.startActivity(intent2);
                return true;
            case R.id.drinks:
                Intent intent3 = new Intent(this, drinks.class);
                this.startActivity(intent3);
                return true;
            case R.id.desserts:
                Intent intent4 = new Intent(this, desserts.class);
                this.startActivity(intent4);
                return true;
            case R.id.side:
                Intent intent5 = new Intent(this, sides.class);
                this.startActivity(intent5);
                return true;
            default:
                return super.onOptionsItemSelected(item);
        }

    }
}