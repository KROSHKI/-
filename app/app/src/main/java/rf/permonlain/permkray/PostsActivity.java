package rf.permonlain.permkray;

import android.os.Bundle;
import android.support.design.widget.CollapsingToolbarLayout;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.ImageView;
import android.widget.TextView;

import com.bumptech.glide.Glide;

public class PostsActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_posts);
        //hide the default action bar
//        getSupportActionBar().hide();

        ImageView closeLoginIv = (ImageView) findViewById(R.id.back_btn);
        closeLoginIv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                PostsActivity.super.onBackPressed();
            }
        });

        //recieve data
        String name = getIntent().getExtras().getString("post_name");
        String date = getIntent().getExtras().getString("post_date");
        String description = getIntent().getExtras().getString("post_description");
        String image_url = getIntent().getExtras().getString("post_thumbnail");

        //ini views
        CollapsingToolbarLayout collapsingToolbarLayout = findViewById(R.id.collapsingtoolbar_id);
        collapsingToolbarLayout.setTitleEnabled(true);

        TextView tv_name = findViewById(R.id.aa_post_name);
        TextView tv_date = findViewById(R.id.aa_date);
        TextView tv_description = findViewById(R.id.description);
        ImageView img = findViewById(R.id.aa_thumbnail);

        //settings values to each view

        tv_name.setText(name);
        tv_date.setText(date);
        tv_description.setText(description);
        //set image using Glide
        Glide.with(this).load(image_url).into(img);
    }
}