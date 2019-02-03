package rf.permonlain.permkray;

import android.content.Intent;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.Toolbar;
import android.view.MenuItem;
import android.widget.Button;
import android.widget.Toast;

import java.util.HashMap;

public class Places extends AppCompatActivity implements NavigationView.OnNavigationItemSelectedListener{

    //private TextView name, email;
    private Button logout_btn;

    private Toolbar toolbar;
    private DrawerLayout drawerLayout;

    SessionManager sessionManager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_places);

        initToolbar();
        drawerLayout = (DrawerLayout) findViewById(R.id.drawer_layout);

        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(this, drawerLayout, toolbar, R.string.view_navigation_open, R.string.view_navigation_close);
        drawerLayout.setDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.navigation);
        navigationView.setNavigationItemSelectedListener(this);

        sessionManager = new SessionManager(this);
        sessionManager.checkLogin();

//        name = findViewById(R.id.name);
//        email = findViewById(R.id.email);
//        logout_btn = findViewById(R.id.logout_btn);

        //Записали сессии авторизированного пользователя
        HashMap<String, String> user = sessionManager.getUserDetail();
        String mName = user.get(sessionManager.NAME);
        String mEmail = user.get(sessionManager.EMAIL);
        //Установили сессии
//        name.setText(mName);
//        email.setText(mEmail);
    }

    private void initToolbar() {
        toolbar = (Toolbar) findViewById(R.id.toolbar);
        toolbar.setTitle(R.string.app_name);
        toolbar.setTitleTextColor(android.graphics.Color.WHITE);
        toolbar.setOnMenuItemClickListener(new Toolbar.OnMenuItemClickListener() {
            @Override
            public boolean onMenuItemClick(MenuItem menuItem) {
                return false;
            }
        });

        toolbar.inflateMenu(R.menu.menu);
    }
//    getSupportFragmentManager().beginTransaction().replace(R.id.fragment_container,
//                        new PlacesFragment()).commit();
    @Override
    public boolean onNavigationItemSelected(@NonNull MenuItem item) {
        switch(item.getItemId()){
            case R.id.actionNewItem:
                //С главной страницы сайта
                Intent intent1 = new Intent(Places.this, HomeActivity.class);
                startActivity(intent1);
                break;
            case R.id.actionPlacesItem:
                Toast.makeText(Places.this, "Страница интересных мест", Toast.LENGTH_LONG).show();
                break;
            case R.id.actionHistoryItem:
                Toast.makeText(Places.this, "Страница истории", Toast.LENGTH_LONG).show();
                break;
            case R.id.actionEventsItem:
                Toast.makeText(Places.this, "Страница событий", Toast.LENGTH_LONG).show();
                break;
            case R.id.actionProfileItem:
                Toast.makeText(Places.this, "Страница профиля", Toast.LENGTH_LONG).show();
                break;
            case R.id.logout:
                sessionManager.logout();
                break;
        }

        drawerLayout.closeDrawer(GravityCompat.START);

        return true;
    }


}
