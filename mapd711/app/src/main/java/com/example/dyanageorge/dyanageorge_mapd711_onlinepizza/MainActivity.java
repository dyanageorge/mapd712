package com.example.dyanageorge.dyanageorge_mapd711_onlinepizza;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {

    //create vars
    public Button pickUpButton;
    public Button deliveryButton;

    //create method for pick up button
    public void pickup() {
        pickUpButton = (Button)findViewById(R.id.pickUpButton);
        //wire button
        pickUpButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //tell iprogra what to do
                Intent pickup = new Intent(MainActivity.this, home.class);
            }
        });
    }

    //create method for pick up button
    public void deliver(){
        deliveryButton = (Button)findViewById(R.id.deliveryButton);
        //wire the button
        deliveryButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                //tell the program what too do
                Intent delivery = new Intent(MainActivity.this, home.class);
            }
        });
    }
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        //to run when the button functions when the page loads
        pickup();
        deliver();
    }
    //button info for pickup

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        MenuInflater inflater = getMenuInflater();
        inflater.inflate(R.menu.main_menu, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {

        switch (item.getItemId()){
            case R.id.desserts:
                Intent intent1 = new Intent(this, desserts.class);
                this.startActivity(intent1);
                return true;
            case R.id.drinks:
                Intent intent2 = new Intent(this, drinks.class);
                this.startActivity(intent2);
                return true;
            case R.id.pasta:
                Intent intent3 = new Intent(this, pasta.class);
                this.startActivity(intent3);
                return true;
            case R.id.pizza:
                Intent intent4 = new Intent(this, pizza.class);
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
