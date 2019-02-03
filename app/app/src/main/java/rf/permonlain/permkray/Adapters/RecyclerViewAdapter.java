package rf.permonlain.permkray.Adapters;

import android.content.Context;
import android.content.Intent;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;

import com.bumptech.glide.Glide;
import com.bumptech.glide.request.RequestOptions;

import java.util.Collections;
import java.util.List;

import rf.permonlain.permkray.Models.PostsInfo;
import rf.permonlain.permkray.PostsActivity;
import rf.permonlain.permkray.R;

public class RecyclerViewAdapter extends RecyclerView.Adapter<RecyclerViewAdapter.MyViewHolder> {

    private Context mContext;
    private LayoutInflater inflater;
    List<PostsInfo> mData = Collections.emptyList();
    PostsInfo current;
    int currentPos=0;
    RequestOptions option;

    public RecyclerViewAdapter(Context mContext, List<PostsInfo> mData) {
        this.mContext = mContext;
        inflater= LayoutInflater.from(mContext);
        this.mData = mData;

        // Настройки для  Glide
        option = new RequestOptions().centerCrop().placeholder(R.drawable.loading_shape).error(R.drawable.loading_shape);
    }
    // Inflate the layout when viewholder created
    //возвращает ViewHolder, в котором будут данные по 1 объекту Postsinfo
    @Override
    public MyViewHolder onCreateViewHolder(ViewGroup parent, int viewType) {

        View view;
        view = inflater.inflate(R.layout.post_row_item, parent, false);
        final MyViewHolder holder = new MyViewHolder(view);
        holder.view_container.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(mContext,PostsActivity.class);
                i.putExtra("post_name", mData.get(holder.getAdapterPosition()).getName());
                i.putExtra("post_date", mData.get(holder.getAdapterPosition()).getDate());
                i.putExtra("post_description", mData.get(holder.getAdapterPosition()).getDescription());
                i.putExtra("post_thumbnail", mData.get(holder.getAdapterPosition()).getImage_url());

                mContext.startActivity(i);

            }
        });


        return holder;
    }
    //Привязка ViewHolder к Postsinfo о определённой позиции
    @Override
    public void onBindViewHolder(MyViewHolder holder, int position) {
        //Запись данных в view
        MyViewHolder myHolder = (MyViewHolder)holder;
        PostsInfo current = mData.get(position);
        myHolder.tv_post_name.setText(current.getName());
        //myHolder.tv_mini_description.setText(current.getMiniDescription());
        //myHolder.tv_description.setText(current.getDescription());
        myHolder.tv_date.setText(current.getDate());
        // Подгрузка и установка в ImageView с помощью Glide
        Glide.with(mContext).load(current
                .getImage_url())
                .apply(option)
                .into(myHolder.img_thumbnail);
    }
    //возвращает количество элементов в списке
    @Override
    public int getItemCount() {
        return mData.size();
    }

    public static class MyViewHolder extends RecyclerView.ViewHolder{

        TextView tv_post_name;
        //TextView tv_mini_description;
        TextView tv_description;
        TextView tv_date;
        ImageView img_thumbnail;
        LinearLayout view_container;


        public MyViewHolder(View itemView) {
            super(itemView);

            view_container = itemView.findViewById(R.id.container);
            tv_post_name = itemView.findViewById(R.id.post_name);
            tv_date = itemView.findViewById(R.id.date);
            tv_description = itemView.findViewById(R.id.description);
            //tv_mini_description = itemView.findViewById(R.id.mini_description);
            img_thumbnail = itemView.findViewById(R.id.thumbnail);

        }
    }

}
