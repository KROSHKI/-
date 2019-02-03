package rf.permonlain.permkray;

import android.content.Intent;
import android.os.AsyncTask;
import android.os.Bundle;
import android.support.annotation.NonNull;
import android.support.design.widget.NavigationView;
import android.support.v4.view.GravityCompat;
import android.support.v4.widget.DrawerLayout;
import android.support.v4.widget.SwipeRefreshLayout;
import android.support.v7.app.ActionBarDrawerToggle;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.support.v7.widget.Toolbar;
import android.view.MenuItem;
import android.widget.Button;
import android.widget.Toast;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

import rf.permonlain.permkray.Adapters.RecyclerViewAdapter;
import rf.permonlain.permkray.Models.PostsInfo;

public class HomeActivity extends AppCompatActivity implements NavigationView.OnNavigationItemSelectedListener{

    // Компонент обновления
    SwipeRefreshLayout mSwipeRefreshLayout;
    // Ссылка на JSON файл
    //private final String JSON_URL = "https://xn--80ajngegddgl7k.xn--p1ai/postinfo.json";
    private static final int LAYOUT = R.layout.activity_home;
    // CONNECTION_TIMEOUT and READ_TIMEOUT are in milliseconds
    public static final int CONNECTION_TIMEOUT = 10000;
    public static final int READ_TIMEOUT = 15000;
    private RecyclerView mRVFishPrice;
    private RecyclerViewAdapter mAdapter;



    //private TextView name, email;
    private Button logout_btn;

    private Toolbar toolbar;
    private DrawerLayout drawerLayout;

    SessionManager sessionManager;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        initToolbar();
        drawerLayout = (DrawerLayout) findViewById(R.id.drawer_layout);

        ActionBarDrawerToggle toggle = new ActionBarDrawerToggle(this, drawerLayout, toolbar, R.string.view_navigation_open, R.string.view_navigation_close);
        drawerLayout.setDrawerListener(toggle);
        toggle.syncState();

        NavigationView navigationView = (NavigationView) findViewById(R.id.navigation);
        navigationView.setNavigationItemSelectedListener(this);

//        if(savedInstanceState == null) {
//            getSupportFragmentManager().beginTransaction().replace(R.id.fragment_container,
//                    new PlacesFragment()).commit();
//            navigationView.setCheckedItem(R.id.actionPlacesItem);
//        }

        mSwipeRefreshLayout = (SwipeRefreshLayout)findViewById(R.id.swifeRefresh);
        mSwipeRefreshLayout.setOnRefreshListener(new SwipeRefreshLayout.OnRefreshListener() {
            @Override
            public void onRefresh() {
                new AsyncFetch().execute();
            }
        });
        //Make call to AsyncTask
        new AsyncFetch().execute();

        sessionManager = new SessionManager(this);
        sessionManager.checkLogin();

        //name = findViewById(R.id.name);
//        email = findViewById(R.id.email);
//        logout_btn = findViewById(R.id.logout_btn);

        //Записали сессии авторизированного пользователя
        HashMap<String, String> user = sessionManager.getUserDetail();
        String mName = user.get(sessionManager.NAME);
        String mEmail = user.get(sessionManager.EMAIL);
        //Установили сессии
        //name.setText(mName);
//        email.setText(mEmail);
//
//        //Кнопка выйти из аккаунта
//        logout_btn.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                sessionManager.logout();
//            }
//        });
    }

    private class AsyncFetch extends AsyncTask<String, String, String> {
        //Интерфейс загрузки НИЖЕ
        //ProgressDialog pdLoading = new ProgressDialog(MainActivity.this);
        HttpURLConnection conn;
        URL url = null;

        @Override
        protected void onPreExecute() {
            super.onPreExecute();

            //этот метод показывает интерфейс загрузки
            //pdLoading.setMessage("\tLoading...");
            //pdLoading.setCancelable(false);
            //pdLoading.show();

        }

        @Override
        protected String doInBackground(String... params) {
            try {

                // Enter URL address where your json file resides
                // Even you can make call to php file which returns json data
                url = new URL("https://xn--80ajngegddgl7k.xn--p1ai/postinfo.json");

            } catch (MalformedURLException e) {
                // TODO Auto-generated catch block
                e.printStackTrace();
                return e.toString();
            }
            try {

                // Setup HttpURLConnection class to send and receive data from php and mysql
                conn = (HttpURLConnection) url.openConnection();
                conn.setReadTimeout(READ_TIMEOUT);
                conn.setConnectTimeout(CONNECTION_TIMEOUT);
                conn.setRequestMethod("GET");

                // setDoOutput to true as we recieve data from json file
                conn.setDoOutput(true);

            } catch (IOException e1) {
                // TODO Auto-generated catch block
                e1.printStackTrace();
                return e1.toString();
            }

            try {

                int response_code = conn.getResponseCode();

                // Check if successful connection made
                if (response_code == HttpURLConnection.HTTP_OK) {

                    // Read data sent from server
                    InputStream input = conn.getInputStream();
                    BufferedReader reader = new BufferedReader(new InputStreamReader(input));
                    StringBuilder result = new StringBuilder();
                    String line;

                    while ((line = reader.readLine()) != null) {
                        result.append(line);
                    }

                    // Pass data to onPostExecute method
                    return (result.toString());

                } else {

                    return ("unsuccessful");
                }

            } catch (IOException e) {
                e.printStackTrace();
                return e.toString();
            } finally {
                conn.disconnect();
            }


        }

        @Override
        protected void onPostExecute(String result) {

            //этот метод показывает интерфейс загрузки
            //pdLoading.dismiss();

            List<PostsInfo> data = new ArrayList<>();

            //pdLoading.dismiss();
            try {

                JSONArray jArray = new JSONArray(result);

                // Extract data from json and store into ArrayList as class objects
                for(int i=0;i<jArray.length();i++){
                    JSONObject json_data = jArray.getJSONObject(i);
                    PostsInfo postsInfo = new PostsInfo();
                    postsInfo.setName(json_data.getString("name"));
                    postsInfo.setDescription(json_data.getString("description"));
                    //postsInfo.setMiniDescription(json_data.getString("mini_description"));
                    postsInfo.setDate(json_data.getString("date"));
                    postsInfo.setImage_url("https://xn--80ajngegddgl7k.xn--p1ai/assets/content_images/app/"+json_data.getString("image_name"));
                    data.add(postsInfo);
                }

                // Setup and Handover data to recyclerview
                mRVFishPrice = (RecyclerView)findViewById(R.id.recyclerviewid);
                mAdapter = new RecyclerViewAdapter(HomeActivity.this, data);
                mRVFishPrice.setAdapter(mAdapter);
                mRVFishPrice.setLayoutManager(new LinearLayoutManager(HomeActivity.this));

            } catch (JSONException e) {
                Toast.makeText(HomeActivity.this, e.toString(), Toast.LENGTH_LONG).show();
            }
            mSwipeRefreshLayout.setRefreshing(false);
        }

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

    @Override
    public boolean onNavigationItemSelected(@NonNull MenuItem item) {
        switch(item.getItemId()){
            case R.id.actionNewItem:
                Intent intent1 = new Intent(HomeActivity.this, HomeActivity.class);
                startActivity(intent1);
                break;
            case R.id.actionPlacesItem:
                Toast.makeText(HomeActivity.this, "Страница интересных мест", Toast.LENGTH_LONG).show();
                break;
            case R.id.actionHistoryItem:
                Toast.makeText(HomeActivity.this, "Страница истории", Toast.LENGTH_LONG).show();
                break;
            case R.id.actionEventsItem:
                Toast.makeText(HomeActivity.this, "Страница событий", Toast.LENGTH_LONG).show();
                break;
            case R.id.actionProfileItem:
                Toast.makeText(HomeActivity.this, "Страница профиля", Toast.LENGTH_LONG).show();
                break;
            case R.id.logout:
                sessionManager.logout();
                break;
        }

        drawerLayout.closeDrawer(GravityCompat.START);

        return true;
    }
//    private  void mainBackground(){
//        Intent intent3 = new Intent(HomeActivity.this, Tested.class);
//        startActivity(intent3);
//    }


}
