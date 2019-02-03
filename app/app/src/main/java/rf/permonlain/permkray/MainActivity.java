package rf.permonlain.permkray;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }

    public void JoinPressed(View view){
        //Создание перехода на страницу регистрации
        Intent signupIntent = new Intent(MainActivity.this, SignUpActivity.class);
        startActivity(signupIntent);
        //Toast.makeText(MainActivity.this, "Процесс регистрации", Toast.LENGTH_SHORT).show();
    }
    public void LoginPressed(View view){
        //Создание перехода на страницу входа
        Intent loginIntent = new Intent(MainActivity.this, LoginActivity.class);
        startActivity(loginIntent);
        //Toast.makeText(MainActivity.this, "Процесс авторизации", Toast.LENGTH_SHORT).show();
    }

}
