package com.example.dyanageorge.dyanageorge_mapd711_onlinepizza;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuInflater;
import android.view.MenuItem;

public class home extends AppCompatActivity {

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
    public  boolean onOptionsItemSelected(MenuItem item){
        switch (item.getItemId()){
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
